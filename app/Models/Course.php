<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'pdf_path'];

    public function exam() {
        return $this->hasOne(Exam::class);
    }
}
