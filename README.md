Support System Assignment

Prerequisites
To set up this project on your PC, you'll need the following software installed:
- PHP (version 8.0 or higher) - [Download PHP](https://www.php.net/downloads.php)
- Composer - [Download Composer](https://getcomposer.org/download/)
- Web Server (Apache)
- Database (MySQL)

Installation
1. Clone the repository to your local machine: git clone <repository-url>
2. Navigate to the project directory: cd <project-directory>
3. Install dependencies using Composer: composer install
4. Create a copy of the `.env.example` file and name it `.env`
5. Generate a new application key: php artisan key:generate
6. Configure the `.env` file with your database credentials and other settings
7. Run database migrations to create the required tables
8. Start the local development server: php artisan serve
9. Open your web browser and visit `http://localhost:8000` to see the application running.
