<?php include __DIR__ . '/header.php'; ?>
<?php
// ========================
// CLOUDINARY CONFIG
// Simpan di Vercel Environment Variables!
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
    die("Invalid email address.");
}

// ========================
// VALIDATE FILE
// ========================
if (empty($_FILES['video']['tmp_name'])) {
    die("No video uploaded.");
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
    die("Invalid file type. Please upload a video file (MP4, MOV, AVI, WEBM).");
}

// Max 60MB
$maxSize = 60 * 1024 * 1024;
if ($fileSize > $maxSize) {
    die("File too large. Maximum size is 60MB.");
}

// ========================
// CLOUDINARY SIGNATURE
// Must include ALL params sorted alphabetically
// ========================
$timestamp = time();
$folder    = 'atenxa_submissions';

$params = [
    'folder'    => $folder,
    'timestamp' => $timestamp,
];

ksort($params); // wajib sort alphabetically

$paramString = '';
foreach ($params as $k => $v) {
    $paramString .= "{$k}={$v}&";
}
$paramString = rtrim($paramString, '&');

// Final signature string = params + api_secret (NO separator)
$signature = sha1($paramString . $api_secret);

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
curl_setopt($ch, CURLOPT_TIMEOUT, 120); // 2 menit timeout untuk video besar
$response = curl_exec($ch);

if (curl_errno($ch)) {
    die("cURL Error: " . curl_error($ch));
}
curl_close($ch);

// ========================
// HANDLE RESPONSE
// ========================
$result = json_decode($response, true);

// ========================
// SUCCESS
// ========================
if (isset($result['secure_url'])) {
    $videoUrl    = $result['secure_url'];
    $videoPublicId = $result['public_id'] ?? '';
    $videoDuration = $result['duration']  ?? '';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upload Success — Atenxa</title>
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

body {
    background: #09090b;
    color: white;
    font-family: 'Inter', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    padding: 24px;
}

.card {
    width: 100%;
    max-width: 620px;
    background: #111114;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 28px;
    padding: 42px;
}

.icon {
    font-size: 48px;
    margin-bottom: 16px;
}

h1 {
    font-size: 36px;
    font-weight: 800;
    letter-spacing: -1px;
    margin-bottom: 12px;
    color: #7dd3fc;
}

.subtitle {
    color: #9ca3af;
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 28px;
}

.data {
    background: #18181c;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 18px;
    padding: 22px;
    margin-bottom: 28px;
}

.row {
    margin-bottom: 18px;
}

.row:last-child { margin-bottom: 0; }

.label {
    color: #6b7280;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    margin-bottom: 4px;
}

.value {
    font-size: 15px;
    color: #f3f4f6;
}

.notice {
    background: rgba(125,211,252,0.08);
    border: 1px solid rgba(125,211,252,0.2);
    border-radius: 14px;
    padding: 18px 22px;
    color: #7dd3fc;
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 28px;
}

.notice strong { font-weight: 700; }

.actions {
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
}

.btn-secondary:hover { color: white; border-color: rgba(255,255,255,0.2); }
</style>
</head>
<body>
<div class="card">
    <div class="icon">🎯</div>
    <h1>Upload Complete</h1>
    <p class="subtitle">
        Your video has been received by Atenxa. 
        Our attention analysis is now queued for review.
    </p>

    <div class="data">
        <div class="row">
            <div class="label">Name</div>
            <div class="value"><?php echo htmlspecialchars($name); ?></div>
        </div>
        <div class="row">
            <div class="label">Email</div>
            <div class="value"><?php echo htmlspecialchars($email); ?></div>
        </div>
        <div class="row">
            <div class="label">Platform</div>
            <div class="value"><?php echo htmlspecialchars($platform); ?></div>
        </div>
        <div class="row">
            <div class="label">File</div>
            <div class="value"><?php echo htmlspecialchars($fileName); ?></div>
        </div>
        <?php if ($videoDuration): ?>
        <div class="row">
            <div class="label">Duration</div>
            <div class="value"><?php echo round($videoDuration, 1); ?>s</div>
        </div>
        <?php endif; ?>
    </div>

    <div class="notice">
        <strong>What happens next?</strong><br>
        Your Atenxa Attention Report — including scorecard, retention curve, 
        and improvement suggestions — will be delivered to 
        <strong><?php echo htmlspecialchars($email); ?></strong> within 24 hours.<br><br>
        One last thing: <strong>don't post that video yet. 😉</strong>
    </div>

    <div class="actions">
        <a href="<?php echo htmlspecialchars($videoUrl); ?>" target="_blank" class="btn-primary">
            View Uploaded Video →
        </a>
        <a href="/" class="btn-secondary">
            Back to Atenxa
        </a>
    </div>
</div>
</body>
</html>
<?php

// ========================
// ERROR — Show debug info
// ========================
} else {
    echo "<div style='background:#09090b;color:white;padding:40px;font-family:monospace;'>";
    echo "<h2 style='color:#fb7185;margin-bottom:16px;'>Upload Failed</h2>";
    echo "<pre style='background:#18181c;padding:20px;border-radius:12px;overflow:auto;'>";
    print_r($result);
    echo "</pre>";
    echo "<a href='/submit.php' style='color:#7dd3fc;margin-top:20px;display:inline-block;'>← Try Again</a>";
    echo "</div>";
}
?>
<?php include __DIR__ . '/footer.php'; ?>
