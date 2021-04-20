<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountsModel extends Model
{
    use HasFactory;
    protected $table="accounts_models";
    protected $fillable = ['email', 'password'];
}
