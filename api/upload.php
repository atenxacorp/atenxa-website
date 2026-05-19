<?php include __DIR__ . '/header.php'; ?>
<?php
// ========================
// CLOUDINARY CONFIG
// ========================
$cloud_name = getenv('CLOUDINARY_CLOUD_NAME') ?: 'deintz8ij';
$api_key    = getenv('CLOUDINARY_API_KEY')    ?: '692779225688919';
$api_secret = getenv('CLOUDINARY_API_SECRET') ?: '56b6LPCx7XdpNjxwfujFcYm14DI';

// ========================
// ONLY ACCEPT POST
// ========================
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /submit.php");
    exit;
}

// ========================
// GET FORM DATA
// ========================
$name     = trim($_POST['name']     ?? '');
$email    = trim($_POST['email']    ?? '');
$platform = trim($_POST['platform'] ?? '');
$notes    = trim($_POST['notes']    ?? '');

// ========================
// VALIDATE EMAIL
// ========================
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die(showError("Invalid email address. Please go back and try again."));
}

// ========================
// VALIDATE FILE
// ========================
if (empty($_FILES['video']['tmp_name'])) {
    die(showError("No video uploaded. Please go back and select a video file."));
}

$fileTmp  = $_FILES['video']['tmp_name'];
$fileName = $_FILES['video']['name'];
$fileType = $_FILES['video']['type'];
$fileSize = $_FILES['video']['size'];

// Allowed video types
$allowedTypes = [
    'video/mp4',
    'video/quicktime',
    'video/avi',
    'video/mov',
    'video/webm',
    'video/x-msvideo',
];

if (!in_array($fileType, $allowedTypes)) {
    die(showError("Invalid file type. Please upload MP4, MOV, AVI, or WEBM."));
}

// Max 60MB
$maxSize = 60 * 1024 * 1024;
if ($fileSize > $maxSize) {
    $sizeMB = round($fileSize / 1024 / 1024, 1);
    die(showError("File too large ({$sizeMB}MB). Maximum size is 60MB."));
}

// ========================
// CLOUDINARY SIGNATURE
// ========================
$timestamp = time();
$folder    = 'atenxa_submissions';

$params = [
    'folder'    => $folder,
    'timestamp' => $timestamp,
];

ksort($params);

$paramString = '';
foreach ($params as $k => $v) {
    $paramString .= "{$k}={$v}&";
}
$paramString = rtrim($paramString, '&');
$signature   = sha1($paramString . $api_secret);

// ========================
// CLOUDINARY API URL
// ========================
$url = "https://api.cloudinary.com/v1_1/{$cloud_name}/video/upload";

// ========================
// PREPARE UPLOAD
// ========================
$postFields = [
    'file'      => new CURLFile($fileTmp, $fileType, $fileName),
    'api_key'   => $api_key,
    'timestamp' => $timestamp,
    'signature' => $signature,
    'folder'    => $folder,
];

// ========================
// SEND TO CLOUDINARY
// ========================
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 120);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    die(showError("Upload error: " . curl_error($ch)));
}
curl_close($ch);

// ========================
// HANDLE RESPONSE
// ========================
$result = json_decode($response, true);

// ========================
// SUCCESS
// ========================
if (isset($result['secure_url'])):
    $videoUrl      = $result['secure_url'];
    $videoDuration = isset($result['duration']) ? round($result['duration'], 1) : null;
?>

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

.success-wrap {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 120px 24px 80px;
}

.success-card {
    width: 100%;
    max-width: 620px;
    background: #111114;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 28px;
    padding: 42px;
}

.success-icon {
    font-size: 48px;
    margin-bottom: 20px;
}

.success-title {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: 40px;
    font-weight: 800;
    letter-spacing: -0.05em;
    color: #7dd3fc;
    margin-bottom: 12px;
}

.success-sub {
    color: #9ca3af;
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 32px;
}

.data-box {
    background: #18181c;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 18px;
    padding: 24px;
    margin-bottom: 24px;
}

.data-row {
    display: flex;
    flex-direction: column;
    margin-bottom: 18px;
}

.data-row:last-child { margin-bottom: 0; }

.data-label {
    color: #6b7280;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    margin-bottom: 4px;
}

.data-value {
    color: #f3f4f6;
    font-size: 15px;
}

.notice-box {
    background: rgba(125,211,252,0.08);
    border: 1px solid rgba(125,211,252,0.2);
    border-radius: 16px;
    padding: 20px 24px;
    color: #7dd3fc;
    font-size: 14px;
    line-height: 1.75;
    margin-bottom: 28px;
}

.notice-box strong { font-weight: 700; }

.action-row {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.btn-primary {
    background: #7dd3fc;
    color: #060606;
    text-decoration: none;
    padding: 14px 24px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 15px;
    transition: opacity .2s;
    display: inline-block;
}

.btn-primary:hover { opacity: .88; }

.btn-secondary {
    background: transparent;
    color: #9ca3af;
    text-decoration: none;
    padding: 14px 24px;
    border-radius: 12px;
    font-size: 15px;
    border: 1px solid rgba(255,255,255,0.08);
    transition: color .2s, border-color .2s;
    display: inline-block;
}

.btn-secondary:hover {
    color: white;
    border-color: rgba(255,255,255,0.2);
}
</style>

<div class="success-wrap">
    <div class="success-card">

        <div class="success-icon">🎯</div>

        <h1 class="success-title">Upload Complete</h1>

        <p class="success-sub">
            Your video has been received by Atenxa.
            Our attention analysis pipeline is now queued for review.
        </p>

        <div class="data-box">
            <div class="data-row">
                <span class="data-label">Name</span>
                <span class="data-value"><?php echo htmlspecialchars($name); ?></span>
            </div>
            <div class="data-row">
                <span class="data-label">Email</span>
                <span class="data-value"><?php echo htmlspecialchars($email); ?></span>
            </div>
            <div class="data-row">
                <span class="data-label">Platform</span>
                <span class="data-value"><?php echo htmlspecialchars($platform); ?></span>
            </div>
            <div class="data-row">
                <span class="data-label">File</span>
                <span class="data-value"><?php echo htmlspecialchars($fileName); ?></span>
            </div>
            <?php if ($videoDuration): ?>
            <div class="data-row">
                <span class="data-label">Duration</span>
                <span class="data-value"><?php echo $videoDuration; ?>s</span>
            </div>
            <?php endif; ?>
        </div>

        <div class="notice-box">
            <strong>What happens next?</strong><br>
            Your Atenxa Attention Report — including scorecard, retention curve,
            and improvement suggestions — will be delivered to
            <strong><?php echo htmlspecialchars($email); ?></strong> within 24 hours.<br><br>
            One last thing: <strong>don't post that video yet. 😉</strong>
        </div>

        <div class="action-row">
            <a href="<?php echo htmlspecialchars($videoUrl); ?>" target="_blank" class="btn-primary">
                View Uploaded Video →
            </a>
            <a href="/" class="btn-secondary">
                Back to Atenxa
            </a>
        </div>

    </div>
</div>

<?php

// ========================
// UPLOAD FAILED
// ========================
else:
    echo showError("Upload failed. Please try again.", $result);
endif;

// ========================
// ERROR HELPER FUNCTION
// ========================
function showError($message, $debug = null) {
    $html = "
    <style>
    .error-wrap {
        min-height:100vh;
        display:flex;
        align-items:center;
        justify-content:center;
        padding:120px 24px;
    }
    .error-card {
        width:100%;
        max-width:560px;
        background:#111114;
        border:1px solid rgba(251,113,133,0.2);
        border-radius:28px;
        padding:42px;
        text-align:center;
    }
    .error-icon { font-size:48px; margin-bottom:16px; }
    .error-title {
        font-family:'Cabinet Grotesk',sans-serif;
        font-size:32px;
        font-weight:800;
        color:#fb7185;
        margin-bottom:12px;
        letter-spacing:-0.04em;
    }
    .error-msg {
        color:#9ca3af;
        font-size:15px;
        line-height:1.7;
        margin-bottom:28px;
    }
    .btn-back {
        background:#7dd3fc;
        color:#060606;
        text-decoration:none;
        padding:14px 28px;
        border-radius:12px;
        font-weight:700;
        font-size:15px;
        display:inline-block;
    }
    </style>
    <div class='error-wrap'>
        <div class='error-card'>
            <div class='error-icon'>⚠️</div>
            <h1 class='error-title'>Upload Failed</h1>
            <p class='error-msg'>" . htmlspecialchars($message) . "</p>
            <a href='/submit.php' class='btn-back'>← Try Again</a>
        </div>
    </div>";

    // Show debug in development
    if ($debug) {
        $html .= "<pre style='background:#18181c;color:#9ca3af;padding:20px;margin:20px;border-radius:12px;overflow:auto;font-size:12px;'>";
        $html .= print_r($debug, true);
        $html .= "</pre>";
    }

    return $html;
}
?>

<?php include __DIR__ . '/footer.php'; ?>
