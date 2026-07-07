<?php
$containerId = gethostname();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project ECS | CloudFreeks</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="hero-banner">
        <h1>Project ECS</h1>
        <p class="tagline">Cloud Deployment Simplified — Powered by <span class="brand">CloudFreeks</span></p>
        <p class="container-id">🆔 Container ID: <strong><?php echo $containerId; ?></strong></p>
    </div>

    <div class="upload-tile">
        <h2>Upload Your Image to S3</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" accept="image/*" required>
            <button type="submit">Upload Now</button>
        </form>
    </div>

    <div class="footer-tile">
        <p>🌐 To learn Cloud from industry experts, visit:</p>
        <a href="https://www.cloudfreeks.com" target="_blank" class="cta-button">CloudFreeks Official Website</a>
    </div>
</body>
</html>

