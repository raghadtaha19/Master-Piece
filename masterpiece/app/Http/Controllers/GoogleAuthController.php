<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
        //redirect Method: The redirect method is responsible for redirecting the user to the Google authentication page.
        // When a user clicks the "Sign in with Google" button or link, this method is invoked to initiate the authentication flow.
    }
    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();
    
            if (!$user) {
                // Check if a user with the same email already exists
                $existingUser = User::where('email', $google_user->getEmail())->first();
    
                if ($existingUser) {
                    // A user with the same email exists, you can handle this as needed
                    // For example, you can log in the existing user
                    Auth::login($existingUser);
                    return redirect()->intended('/');
                }
    
                // Create a new user
                $new_user = User::create([
                    'first_name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                ]);
    
                Auth::login($new_user);
                return redirect()->intended('/');
            } else {
                Auth::login($user);
                return redirect()->intended('/');
            }
        } catch (\Throwable $th) {
            dd('Something went wrong' . $th->getMessage());
        }
    }
    
}
// callbackGoogle Method: This method is called after the user has authenticated with Google and is redirected back to your application. It handles the creation of user records in your application's database based on the Google account information.

// First, it retrieves the user's information from Google using the Socialite::driver('google')->user() method. This information includes the user's name, email, and Google ID.

// It then checks if a user with the same Google ID ('google_id') already exists in your application's database. If a user is found, it means the user has signed in before, and it logs in that user.

// If no user with the same Google ID is found, it checks if a user with the same email address already exists in your database. If an existing user with the same email is found, it logs in that user. This step prevents multiple user accounts with the same email.

// If neither a user with the same Google ID nor a user with the same email exists, it creates a new user record in the database with the user's name, email, and Google ID.

// Finally, it logs in the user (either the existing user or the newly created one) and redirects the user to the intended page after login.

// Error Handling: The try and catch block is used to handle any exceptions that might occur during the process. If an error occurs, it catches the exception and displays a message indicating that something went wrong, along with details about the error (the exception message) using dd() (which is for debugging).