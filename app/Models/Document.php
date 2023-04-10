<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model {

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 
        'name_en', 
        'file', 
        'file_en', 
        'description', 
        'description_en', 
        'type', 
        'type_en', 
        'size', 
        'extension', 
        'student_id', 
    ];

    /**
     * Select student by document.
     */
    public function student() {
        return $this->belongsTo(Student::class)->withDefault([
            'id' => 0, 
            'name' => trans('form.author_default_value'), 
        ]);
    }

    /**
     * Select user by document.
     */
    public function user() {
        return $this->student->belongsTo(User::class)->withDefault([
            'id' => 0, 
            'name' => trans('form.author_default_value'), 
        ]);
    }

}
