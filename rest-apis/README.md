# Laravel 10 REST API Project

Welcome to the Laravel 10 REST API Project! This project serves as a template and guide for building RESTful APIs with Laravel 10.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Table of Contents

- [Project Overview](#project-overview)
- [Getting Started](#getting-started)
- [Features](#features)
- [API Endpoints](#api-endpoints)
- [Authentication](#authentication)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## :computer: Project Overview

This project demonstrates how to create a RESTful API using Laravel 10, a powerful PHP framework. It provides a starting point for building APIs, with features like user authentication and CRUD operations on resources.

## :rocket: Getting Started

1. **Prerequisites**:
   - PHP (>= 7.4)
   - Composer
   - Laravel 10
   - Database (e.g., MySQL, PostgreSQL, SQLite)

2. **Installation**:
   - Clone this repository.
   - Install dependencies with `composer install`.
   - Set up your environment variables (e.g., database configuration, JWT secret).
   - Run migrations and seeders with `php artisan migrate --seed`.

3. **Usage**:
   - Start the Laravel development server: `php artisan serve`.
   - You can now access the API at `http://localhost:8000/api`.

## :sparkles: Features

- User Authentication with JWT.
- CRUD operations on resources.
- API Resource Transformers for data shaping.
- Validation and error handling.
- Secure and well-structured code.

## :hammer_and_wrench: API Endpoints

- **Users**:
   - `GET /api/users` - List all users.
   - `POST /api/users` - Create a new user.
   - `GET /api/users/{id}` - Retrieve user by ID.
   - `PUT /api/users/{id}` - Update user by ID.
   - `DELETE /api/users/{id}` - Delete user by ID.

- **Other Resources**:
   - Define your API endpoints for other resources here.

## :lock: Authentication

- User authentication is implemented using JSON Web Tokens (JWT).
- To access protected endpoints, include the Bearer token in the `Authorization` header.

## :wrench: Testing

- Use PHPUnit for testing.
- Run tests with `php artisan test`.

## :heart: Contributing

Contributions are welcome! Please follow these guidelines:
1. Fork the repository.
2. Create your feature branch: `git checkout -b feature/my-feature`.
3. Commit your changes: `git commit -am 'Add new feature'`.
4. Push to the branch: `git push origin feature/my-feature`.
5. Create a new pull request.

## :page_facing_up: License

This project is open-source and available under the [MIT License](LICENSE).
