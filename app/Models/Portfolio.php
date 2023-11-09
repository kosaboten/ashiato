<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'affiliation',
        'self_introduction',
        'work_experience',
        'region',
        'twitter',
        'facebook',
        'instagram',
        'public_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
