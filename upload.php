<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

$bucket = getenv('S3_BUCKET');
$region = getenv('AWS_REGION');

if ($_FILES["fileToUpload"]["error"] === UPLOAD_ERR_OK) {
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $fileTmp = $_FILES["fileToUpload"]["tmp_name"];

    $s3 = new S3Client([
        'version' => 'latest',
        'region'  => $region
        // IAM Role or Access Keys will be auto-resolved
    ]);

    try {
        $s3->putObject([
            'Bucket' => $bucket,
            'Key'    => 'uploads/' . $fileName,
            'SourceFile' => $fileTmp
            // ✅ No ACL setting required
        ]);

        echo "<p>✅ Image uploaded successfully to S3!</p>";
    } catch (Exception $e) {
        echo "❌ Error uploading to S3: " . $e->getMessage();
    }
} else {
    echo "❌ File upload error.";
}
?>
<a href="index.php">Go Back</a>

