<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsWappButton extends Model
{
    use HasFactory;

    protected $fillable = ['consultancy_url', 'service_url'];
}
