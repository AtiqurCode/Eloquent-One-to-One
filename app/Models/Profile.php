<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mobile_number',
        'website',
        'linked_in',
        'github',
    ];

    // this relation belongs-to from profiles table to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
