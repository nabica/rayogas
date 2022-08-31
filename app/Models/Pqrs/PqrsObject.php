<?php

namespace App\Models\Pqrs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PqrsObject extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
