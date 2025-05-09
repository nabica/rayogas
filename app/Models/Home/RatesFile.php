<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatesFile extends Model
{
    use HasFactory;

    public function zone()
{
    return $this->belongsTo(Zone::class);
}

}
