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
    <div class="app">
        <header class="hero">
            <div class="title">
                <h1>Project ECS</h1>
                <p>Cloud Deployment Simplified — Powered by CloudFreeks</p>
            </div>
            <div class="meta">🆔 Container ID: <strong><?php echo $containerId; ?></strong></div>
        </header>

        <main class="grid">
            <section class="card">
                <h2 style="margin-top:0">Upload Your Image to S3</h2>
                <form class="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
                    <label class="file-drop">
                        <input class="file-input" type="file" name="fileToUpload" accept="image/*" required>
                        <div style="pointer-events:none">
                            <div style="font-weight:700; margin-bottom:6px">Choose an image</div>
                            <div style="color:var(--muted); font-size:13px">PNG, JPG, GIF — max recommended size 5MB</div>
                        </div>
                    </label>

                    <div>
                        <button class="btn" type="submit">Upload Now</button>
                        <a class="btn secondary" href="https://www.cloudfreeks.com" target="_blank" style="margin-left:10px; text-decoration:none">CloudFreeks Official Website</a>
                    </div>

                    <div class="files-list" aria-hidden="true"></div>
                </form>
            </section>

            <aside class="aside">
                <div class="card">
                    <strong>Quick Info</strong>
                    <p style="margin:8px 0 0; color:var(--muted)">Files upload to S3 under <code>uploads/</code>. IAM role or environment credentials are used.</p>
                </div>
            </aside>
        </main>

        <footer>
            <p>Built for demo purposes.</p>
        </footer>
    </div>
</body>
</html>

