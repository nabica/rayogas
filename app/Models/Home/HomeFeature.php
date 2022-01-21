<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Config;

class HomeFeature extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = [
        'image_url',
    ];

    private $uploadsFolder;
    private $featureFolder;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->uploadsFolder = Config::get('rayogas.uploadsFolder');
        $this->featureFolder = Config::get('rayogas.home.feature');
    }

    public function getFolderId()
    {
        return ($this->id < 10)?sprintf('%02d', $this->id):$this->id;
    }

    public function getImageUrlAttribute()
    {
        return asset($this->uploadsFolder . '/' . $this->featureFolder . '/' . $this->getFolderId() . '/' . $this->image);
    }
}
