<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Troubleshooting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'problem _title',
        'problem_content',
        'solution',
        'video_url' 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
