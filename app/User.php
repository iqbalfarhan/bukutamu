<?php

namespace App;

use Auth;
use App\Guru;
use App\Siswa;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password', 'email', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'id', 'created_at', 'updated_at', 'deleted_at', 'status_id', 'email_verified_at', 'role', 'phone'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function details()
    {
        $auth = Auth::User();

        if ($auth->role == 2) {
            return Guru::where('user_id', $auth->id)->first();
        }
        elseif ($auth->role == 3) {
            return Siswa::where('user_id', $auth->id)->first();
        }
        else{
            return "";
        }
    }
}
