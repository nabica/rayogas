<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Config;

class HomeRate extends Model
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

    public function getFolderId()
    {
        return ($this->id < 10)?sprintf('%02d', $this->id):$this->id;
    }

    public function getFileUrlAttribute()
    {
        return asset($this->uploadsFolder . '/' . $this->ratesFolder . '/' . $this->getFolderId() . '/' . $this->file);
    }
}
