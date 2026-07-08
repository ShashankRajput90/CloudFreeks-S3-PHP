<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

$bucket = getenv('S3_BUCKET');
$region = getenv('AWS_REGION');

$message = '';

if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] === UPLOAD_ERR_OK) {
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $fileTmp = $_FILES["fileToUpload"]["tmp_name"];

    $s3 = new S3Client([
        'version' => 'latest',
        'region'  => $region
    ]);

    try {
        $s3->putObject([
            'Bucket' => $bucket,
            'Key'    => 'uploads/' . $fileName,
            'SourceFile' => $fileTmp
        ]);

        $message = '✅ Image uploaded successfully to S3!';
    } catch (Exception $e) {
        $message = '❌ Error uploading to S3: ' . $e->getMessage();
    }
} else {
    $message = '❌ File upload error.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Upload Result</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="app">
        <main class="card" style="max-width:720px; margin:40px auto;">
            <h2 style="margin-top:0">Upload Result</h2>
            <p style="font-weight:600"><?php echo htmlspecialchars($message); ?></p>
            <p style="margin-top:18px"><a class="btn secondary" href="index.php">Go Back</a></p>
        </main>
    </div>
</body>
</html>
