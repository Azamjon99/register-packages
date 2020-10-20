<?php

namespace Azamjon99\Register\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable=['name', 'email', 'parol'];
}
