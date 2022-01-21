<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Config;

class AboutFeature extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = [
        'image_url',
    ];

    private $uploadsFolder;
    private $featuresFolder;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->uploadsFolder = Config::get('rayogas.uploadsFolder');
        $this->featuresFolder = Config::get('rayogas.about.features');
    }

    public function getFolderId()
    {
        return ($this->id < 10)?sprintf('%02d', $this->id):$this->id;
    }

    public function getImageUrlAttribute()
    {
        return asset($this->uploadsFolder . '/' . $this->featuresFolder . '/' . $this->getFolderId() . '/' . $this->image);
    }
}
