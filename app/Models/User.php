<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'is_advisor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function recommendations()
    {
        return $this->hasMany(Recommendation::class);
    }

    public function troubleshootings()
    {
        return $this->hasMany(Troubleshooting::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
