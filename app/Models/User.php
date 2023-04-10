<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * User 
 * 
 * Table Name:    users 
 * Primary Key:   id 
 */
class User extends Authenticatable {

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Select student from user
     */
    public function student() {
        return $this->hasOne(Student::class);
    }

    /**
     * Select city from user (student).
     */
    public function city() {
        return $this->student->city();
    }

    /**
     * Select all posts from user (student).
     * 
     * @source https://laravel.com/docs/8.x/eloquent-relationships#has-many-through
     */
    public function myPosts() {
        return $this->hasManyThrough(Post::class, Student::class);
    }

}
