<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $maxAttempts = 1;
    protected $decayMinutes = 60;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );

        $hours = intdiv($seconds, 3600);
        $minutes = intdiv($seconds, 60);

        if($hours === 0) {
            throw ValidationException::withMessages([
                $this->username() => [Lang::get('auth.throttle_minutes', ['hours' => $hours, 'minutes' => $minutes])],
            ])->status(423);
        } else {
            throw ValidationException::withMessages([
                $this->username() => [Lang::get('auth.throttle', ['minutes' => $minutes])],
            ])->status(423);
        }
    }
}
