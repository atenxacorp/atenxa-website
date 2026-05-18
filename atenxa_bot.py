import os
import time
import requests
from google.oauth2 import service_account
from googleapiclient.discovery import build
from googleapiclient.http import MediaIoBaseDownload
import io
from openai import OpenAI

# --- CONFIGURATION ---
SCOPES = ['https://www.googleapis.com/auth/drive']
SERVICE_ACCOUNT_FILE = 'service_account.json' # Your Google Service Account credentials
DRIVE_FOLDER_ID = '1NQOMuv1J7P3_8pubTxQItJBPlIEl4pwd'
CHECK_INTERVAL = 60 # Check every 60 seconds
OPENAI_API_KEY = 'YOUR_OPENAI_API_KEY'
client = OpenAI(api_key=OPENAI_API_KEY)

def get_drive_service():
    creds = service_account.Credentials.from_service_account_file(
        SERVICE_ACCOUNT_FILE, scopes=SCOPES)
    return build('drive', 'v3', credentials=creds)

def check_for_new_files(service, last_check_time):
    # Query for files in the specific folder created after last_check_time
    query = f"'{DRIVE_FOLDER_ID}' in parents and createdTime > '{last_check_time}'"
    results = service.files().list(q=query, fields="files(id, name, webViewLink, createdTime)").execute()
    return results.get('files', [])

def analyze_video(video_link, file_name):
    print(f"Analyzing: {file_name}")
    
    # Prompt engineering for Atenxa
    prompt = f"""
    You are Atenxa AI, an expert in Attention Engineering. 
    Analyze the video at this link: {video_link}
    
    Provide a report with:
    1. Hook Strength (0-100)
    2. Cognitive Ease (0-100)
    3. Emotional Density (0-100)
    4. Curiosity Gap (0-100)
    5. Identity Resonance (0-100)
    6. Retention Risk (0-100)
    7. Detailed Pacing Analysis (Timestamped)
    8. 3-5 Actionable Improvements.
    
    Format the output as a professional report.
    """

    # Note: Using GPT-4o which can process video links or use specialized video analysis APIs
    response = client.chat.completions.create(
        model="gpt-4o",
        messages=[
            {"role": "system", "content": "You are a world-class Attention Engineer for Atenxa."},
            {"role": "user", "content": prompt}
        ]
    )
    return response.choices[0].message.content

def send_email(to_email, report_content):
    # You can use SendGrid, Mailgun, or a simple SMTP server
    print(f"Sending email to {to_email}...")
    # Implementation for sending email goes here
    pass

def main():
    service = get_drive_service()
    # Use current time as starting point (ISO format)
    last_check_time = time.strftime('%Y-%m-%dT%H:%M:%S.000Z', time.gmtime())
    
    print("Atenxa Bot is running...")
    
    while True:
        try:
            new_files = check_for_new_files(service, last_check_time)
            
            for file in new_files:
                # Extract email from filename (assuming format: Atenxa_platform_email_timestamp_name)
                try:
                    parts = file['name'].split('_')
                    user_email = parts[2]
                except:
                    user_email = "admin@atenxa.com" # Fallback

                report = analyze_video(file['webViewLink'], file['name'])
                send_email(user_email, report)
                
                # Update last_check_time to the latest file's creation time
                last_check_time = file['createdTime']

            time.sleep(CHECK_INTERVAL)
        except Exception as e:
            print(f"Error: {e}")
            time.sleep(10)

if __name__ == "__main__":
    main()
