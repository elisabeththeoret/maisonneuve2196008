<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title', 
        'title_en', 
        'body', 
        'body_en', 
        'sommary', 
        'sommary_en', 
        'student_id', 
    ];

    /**
     * Select student by post.
     */
    public function student() {
        return $this->belongsTo(Student::class)->withDefault([
            'id' => 0, 
            'name' => trans('form.author_default_value'), 
        ]);
    }

    /**
     * Select user by post.
     */
    public function user() {
        return $this->student->belongsTo(User::class)->withDefault([
            'id' => 0, 
            'name' => trans('form.author_default_value'), 
        ]);
    }

}
