<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'assignment',
        'student_id',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
