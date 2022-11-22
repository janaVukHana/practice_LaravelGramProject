<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'description', 'url', 'image'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }
}
