<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'admins';
    protected $fillable = ['email', 'phonenumber', 'name', 'password'];


    use Authenticatable;
}
