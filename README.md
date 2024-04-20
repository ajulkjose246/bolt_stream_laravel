# Bolt Stream: A Laravel-Powered Movie Streaming Platform

Bolt Stream is an innovative movie streaming website crafted with the robust Laravel framework. This platform stands out by offering a seamless streaming experience, allowing users to enjoy a wide array of films and series across different genres.

## Technical Highlights

- **Framework:** Utilizes Laravel, known for its elegant syntax and expressive, scalable architecture.
- **Frontend:** The user interface is designed to be intuitive and responsive, ensuring compatibility across various devices and screen sizes.
- **Backend:** Employs advanced backend features of Laravel to handle complex functionalities like user authentication, session management, and secure payment processing.

## Features

- **Diverse Catalogue:** Hosts a diverse collection of movies and TV shows, catering to a wide audience with varied tastes.
- **User Profiles:** Allows users to create personalized profiles, track their watch history, and receive recommendations based on their preferences.
- **High-Quality Streaming:** Ensures high-quality streaming with adaptive bitrate to provide the best viewing experience regardless of the internet connection speed.
- **Search & Discovery:** Features a powerful search engine and smart discovery tools to help users find content that aligns with their interests.

## Getting Started

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js
- MySQL

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/ajulkjose246/bolt_stream_laravel.git
    ```

2. Navigate to the project directory:

    ```bash
    cd bolt_stream_laravel
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Install NPM dependencies:

    ```bash
    npm install
    ```

5. Set up the environment variables:

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other settings.

6. Generate the application key:

    ```bash
    php artisan key:generate
    ```

7. Run database migrations:

    ```bash
    php artisan migrate
    ```

8. Start the development server:

    ```bash
    php artisan serve
    ```

Visit `http://localhost:8000` in your browser to see Bolt Stream in action!
