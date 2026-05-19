// <?php include 'header.php'; ?>

<?php

// ========================
// CLOUDINARY CONFIG
// ========================

$cloud_name = "deintz8ij";
$api_key = "692779225688919";
$api_secret = "56b6LPCx7XdpNjxwfujFcYm14DI";

// ========================
// GET FORM DATA
// ========================

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$platform = $_POST['platform'] ?? '';
$notes = $_POST['notes'] ?? '';

// ========================
// VALIDATE FILE
// ========================

if (!isset($_FILES['video'])) {
    die("No video uploaded.");
}

$fileTmp = $_FILES['video']['tmp_name'];
$fileName = $_FILES['video']['name'];

if (!$fileTmp) {
    die("Upload failed.");
}

// ========================
// CLOUDINARY SIGNATURE
// ========================

$timestamp = time();

$signature = sha1(
    "timestamp={$timestamp}{$api_secret}"
);

// ========================
// CLOUDINARY API URL
// ========================

$url = "https://api.cloudinary.com/v1_1/$cloud_name/video/upload";

// ========================
// PREPARE FILE UPLOAD
// ========================

$postFields = [
    'file' => new CURLFile($fileTmp),
    'api_key' => $api_key,
    'timestamp' => $timestamp,
    'signature' => $signature,
    'folder' => 'atenxa_submissions'
];

// ========================
// SEND TO CLOUDINARY
// ========================

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if(curl_errno($ch)){
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

if(isset($result['secure_url'])){

    $videoUrl = $result['secure_url'];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Upload Success — Atenxa</title>

<style>

body{
    background:#09090b;
    color:white;
    font-family:Inter,sans-serif;
    display:flex;
    align-items:center;
    justify-content:center;
    min-height:100vh;
    padding:24px;
}

.card{
    width:100%;
    max-width:620px;
    background:#111114;
    border:1px solid rgba(255,255,255,0.06);
    border-radius:28px;
    padding:42px;
}

h1{
    font-size:42px;
    margin-bottom:12px;
}

.success{
    color:#7dd3fc;
}

p{
    color:#9ca3af;
    line-height:1.8;
}

.data{
    margin-top:28px;
    padding:22px;
    border-radius:18px;
    background:#18181c;
}

.label{
    color:#6b7280;
    font-size:13px;
    margin-bottom:4px;
}

.value{
    margin-bottom:18px;
    font-size:15px;
}

.btn{
    display:inline-block;
    margin-top:26px;
    background:#7dd3fc;
    color:black;
    text-decoration:none;
    padding:14px 22px;
    border-radius:14px;
    font-weight:700;
}

</style>

</head>
<body>

<div class="card">

    <h1 class="success">Upload Complete</h1>

    <p>
        Your video has been successfully uploaded to Atenxa.
        Our attention analysis pipeline is now ready for review.
    </p>

    <div class="data">
	<div class="label">NAME</div>
	<div class="value"><?php echo htmlspecialchars($name); ?></div>

        <div class="label">EMAIL</div>
        <div class="value"><?php echo htmlspecialchars($email); ?></div>

        <div class="label">PLATFORM</div>
        <div class="value"><?php echo htmlspecialchars($platform); ?></div>

        <div class="label">FILE</div>
        <div class="value"><?php echo htmlspecialchars($fileName); ?></div>

    </div>

    <a
      class="btn"
      href="<?php echo $videoUrl; ?>"
      target="_blank"
    >
      View Uploaded Video →
    </a>

</div>

</body>
</html>

<?php

}else{

    echo "<pre>";
    print_r($result);
    echo "</pre>";

}

?>

<?php include 'footer.php'; ?>
