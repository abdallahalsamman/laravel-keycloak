# Laravel Keycloak Integration Package

**Laravel Keycloak Integration** is a package that adds API endpoints to integrate Keycloak authorization with Laravel. It allows users to perform actions like login with remember me, registration, sending verification emails, password reset, etc., using Keycloak as the OAuth provider/server.

## Features

- Login with remember me
- Registration
- Sending verification emails
- Forgot password
- Password reset

## Installation

You can install this package via Composer. Run the following command in your Laravel project's root directory:

```bash
composer require abdallahalsamman/keycloak-integration
```

## Usage

1. Register the service provider in `config/app.php`:

```php
'providers' => [
    // ...
    KeycloakIntegration\KeycloakServiceProvider::class,
],
```

1. Publish the package's configuration file (optional):
```bash
php artisan vendor:publish --provider="KeycloakIntegration\KeycloakServiceProvider" --tag="config"
```

1. Configure your Keycloak settings in config/keycloak.php.
1. Access the API endpoints for authentication and user actions:

*    POST /api/auth/login: Login with Keycloak and receive an access token.
*    POST /api/auth/register: Register a new user through Keycloak.
*    POST /api/auth/send-verification-email: Send verification email using Keycloak.
*    POST /api/auth/forgot-password: Initiate password reset using Keycloak.
*    POST /api/auth/reset-password: Reset the user's password using Keycloak.

# Contributing

Contributions are welcome! If you find a bug or have a feature suggestion, please open an issue or submit a pull request.

# License

This package is open-source and available under the MIT License.

# Credits

This Laravel package is developed and maintained by Abdallah Alsamman.

For any questions or support, you can contact us at sammanabdallah@gmail.com
