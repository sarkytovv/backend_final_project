<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessagesModel extends Model
{
    use HasFactory;
    protected $table="messages_models";
    protected $fillable = ['message', 'name', 'email', 'subject', 'image'];
}