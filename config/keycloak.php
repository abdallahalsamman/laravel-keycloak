return [
    /*
    |--------------------------------------------------------------------------
    | Keycloak Server Base URL
    |--------------------------------------------------------------------------
    |
    | The base URL of your Keycloak server.
    |
    */
    'base_url' => env('KEYCLOAK_BASE_URL', 'https://your-keycloak-server.com/auth'),

    /*
    |--------------------------------------------------------------------------
    | Keycloak Realm
    |--------------------------------------------------------------------------
    |
    | The name of the Keycloak realm that your application is using.
    |
    */
    'realm' => env('KEYCLOAK_REALM', 'your-realm'),

    /*
    |--------------------------------------------------------------------------
    | Keycloak Client ID
    |--------------------------------------------------------------------------
    |
    | The client ID of your application registered in Keycloak.
    |
    */
    'client_id' => env('KEYCLOAK_CLIENT_ID', 'your-client-id'),

    /*
    |--------------------------------------------------------------------------
    | Keycloak Client Secret
    |--------------------------------------------------------------------------
    |
    | The client secret of your application registered in Keycloak.
    |
    */
    'client_secret' => env('KEYCLOAK_CLIENT_SECRET', 'your-client-secret'),

    /*
    |--------------------------------------------------------------------------
    | Keycloak API Endpoints
    |--------------------------------------------------------------------------
    |
    | Define the API endpoints used for authentication and user actions.
    |
    */
    'endpoints' => [
        'login' => '/realms/{realm}/protocol/openid-connect/token',
        'register' => '/admin/realms/{realm}/users',
        'verify_email' => '/realms/{realm}/users/{user_id}/send-verify-email',
        'forgot_password' => '/realms/{realm}/users/{user_id}/execute-actions-email',
        'reset_password' => '/realms/{realm}/users/{user_id}/reset-password',
    ],
];

