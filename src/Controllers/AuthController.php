<?php

namespace KeycloakIntegration\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $endpoints = config('keycloak.endpoints');
    
    public function login(Request $request)
    {
      dd($endpoints['login']);
    }

    public function register(Request $request)
    {
        // Implement registration logic using Keycloak
    }

    public function sendVerificationEmail(Request $request)
    {
        // Implement logic to send verification email using Keycloak
    }

    public function forgotPassword(Request $request)
    {
        // Implement logic for "forgot password" using Keycloak
    }

    public function resetPassword(Request $request)
    {
        // Implement logic for "reset password" using Keycloak
    }
}

