<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Function Login Passport
     */
    public function login(Request $request)
    {
        $http = new \GuzzleHttp\Client;
        
        try {    

            $response = $http->post(config('services.passport.login_url'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => config('services.passport.client_id'),
                    'client_secret' => config('services.passport.client_secret'),
                    'username' => $request->username,
                    'password' => $request->password,
                ],
            ]);
    
            // return json_decode((string) $response->getBody(), true);
            return $response->getBody();
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {

            if ($e->getCode() == 400) {
                return response()->json('Invalid Request. Please enter a username or a password', $e->getCode());
            } else if ($e->getCode() == 401) {
                return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
            }

            return response()->json('Something went wrong on the server.', $e->getCode());
            
        }
    }

    /**
     * Function Logout Passport
     */
    public function logout()
    {
        auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json('Logged out successfuly.', 200);
    }
}
