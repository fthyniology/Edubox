<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/ariff-fikri/pelitacafe/blob/Lan/public/images/edubox\logo-text.png?raw=true" width="400"></a></p>

# EduBox

## Introduction

Codebase for EduBox's website, for an engaging user experience.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
- [Docker Compose Services](#docker-compose-services)
- [Additional Commands](#additional-commands)
- [License](#license)

## Prerequisites

Before you begin, make sure you have the following software installed on your system:

- [Docker](https://www.docker.com/get-started)
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [Git](https://git-scm.com/)

## Getting Started

1. Clone this repository (if you haven't already):

    ```bash
    git clone git@github.com:fthyniology/Edubox.git
    cd edubox
    ```

2. Create a copy of the `.env.example` file and rename it to `.env`:

    ```bash
    cp .env.example .env
    ```

3. Customize the `.env` file with your application configuration settings, such as database credentials and app key.

4. Build and start the Docker containers:

    ```bash
    docker compose up -d --build
    ```

5. Run database migrations and seed the database:

    ```bash
    docker exec -ti edubox-app bash
    php artisan migrate:fresh --seed
    ```

6. Access the app in your browser at [http://localhost:8000](http://localhost:8000).

## Docker Compose Services

This Docker Compose setup includes the following services:

- **edubox-app**: The Laravel application container.
- **edubox-nginx**: A web server container using Nginx to serve the Laravel app.
- **edubox-database**: The MySQL database container.

## Additional Commands

- Stop the Docker containers:

    ```bash
    docker compose down
    ```

- View logs (e.g., Laravel logs):

    ```bash
    docker compose logs
    ```

- List all containers (e.g., including the stopped ones):

    ```bash
    docker ps -a
    ```

- Run auto changelog:

    ```bash
    auto-changelog
    ```

- Run blade formatter

    ```bash
    node_modules/.bin/blade-formatter resources/views/**/*.blade.php -w
    ```

## Credits

- [Ariff Fikri](https://github.com/ariff-fikri)
- [Adlan Fatihin](https://github.com/fthyniology)

## About EduBox

EduBox: Elevate your learning experience with our innovative education site, where knowledge meets accessibility, fostering a dynamic environment for academic growth.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
