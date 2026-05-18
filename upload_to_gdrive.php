<?php
/**
 * Atenxa - Google Drive Upload Script
 * Note: You need to install Google API Client Library via Composer:
 * composer require google/apiclient:^2.15
 */

require_once 'vendor/autoload.php';

// Configuration - Replace with your own details
$client_secret_path = 'credentials.json';
$folder_id = 'YOUR_GOOGLE_DRIVE_FOLDER_ID'; // The ID of the folder where videos will be saved

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['video'])) {
    $email = $_POST['email'];
    $platform = $_POST['platform'];
    $file = $_FILES['video'];

    try {
        $client = new Google\Client();
        $client->setAuthConfig($client_secret_path);
        $client->addScope(Google\Service\Drive::DRIVE_FILE);
        
        // This part usually requires a stored token or service account
        // For a startup, a Service Account is recommended for background uploads
        $driveService = new Google\Service\Drive($client);

        $fileMetadata = new Google\Service\Drive\DriveFile([
            'name' => 'Atenxa_' . $platform . '_' . $email . '_' . time() . '_' . $file['name'],
            'parents' => [$folder_id]
        ]);

        $content = file_get_contents($file['tmp_name']);

        $uploadedFile = $driveService->files->create($fileMetadata, [
            'data' => $content,
            'mimeType' => $file['type'],
            'uploadType' => 'multipart',
            'fields' => 'id, webViewLink'
        ]);

        // Success! Redirect to a thank you page or show success
        echo "<h1>Upload Success!</h1>";
        echo "<p>File ID: " . $uploadedFile->id . "</p>";
        echo "<p>Our AI is now analyzing your video. You will receive an email at $email shortly.</p>";
        echo "<a href='index.php'>Back to Home</a>";

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: submit.php");
}
