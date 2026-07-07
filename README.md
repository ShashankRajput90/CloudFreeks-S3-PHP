# 🚀 PHP S3 Upload App – CloudFreeks

A professional, containerized PHP application that allows image uploads to S3 using AWS SDK for PHP. Built for ECS Fargate deployment.

## 🌐 Live Demo UI Features
- CloudFolks branding
- Uploads images to S3
- Displays container ID (for load balancing tests)
- Fully Dockerized and ECS-ready

## 🛠 How to Build and Run Locally

```bash
composer install
docker build -t cloudfreeks-php-app .
docker run -d -p 8080:80 \
  -e S3_BUCKET=your-bucket \
  -e AWS_REGION=your-region \
  -e AWS_ACCESS_KEY_ID=your-key \
  -e AWS_SECRET_ACCESS_KEY=your-secret \
  --name php-test cloudfreeks-php-app
## 🧠 Learn More
Visit [https://www.cloudfreeks.com](https://www.cloudfreeks.com) to learn cloud the right way.
