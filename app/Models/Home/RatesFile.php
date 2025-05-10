<?php

namespace App\Models\Home;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatesFile extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = [
        'file_url',
    ];

    private $uploadsFolder;
    private $ratesFolder;


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->uploadsFolder = Config::get('rayogas.uploadsFolder');
        $this->ratesFolder = Config::get('rayogas.home.rates');
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id');
    }

    public function getFolderId()
    {
        return ($this->id < 10) ? sprintf('%02d', $this->id) : $this->id;
    }

    public function getFileUrlAttribute()
    {
        return asset($this->uploadsFolder . '/' . $this->ratesFolder . '/' . $this->getFolderId() . '/' . $this->file);
    }
}
