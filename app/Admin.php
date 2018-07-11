<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Support\Facades\Auth;

class Admin extends Authenticatable {
    use Notifiable;

    protected $redirect = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    public function getAuthenticatedAdmin() {
        return Auth::user();
    }

    public function updateAdmin($adm_id, $request) {
        return Admin::find($adm_id)->update([
            'name' => $request->name,
            'avatar' => $request->avatar,
        ]);
    }
}
