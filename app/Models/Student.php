<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Student 
 * 
 * Table Name:    students 
 * Primary Key:   id 
 */
class Student extends Model {

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 
        'birthday', 
        'email', 
        'phone', 
        'address', 
        'city_id', 
        'user_id', 
    ];

    /**
     * Set user ownership of student.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Set city ownership of student.
     */
    public function city() {
        return $this->belongsTo(City::class);
    }

    /**
     * Select posts from student.
     */
    public function myPosts() {
        return $this->hasMany(Post::class);
    }

}
