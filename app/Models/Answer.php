<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function homework()
    {
        return $this->belongsTo(Homework::class);
    }
}
