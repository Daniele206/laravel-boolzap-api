<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function chats(){
        return $this->belongsToMany(Chat::class);
    }
}
