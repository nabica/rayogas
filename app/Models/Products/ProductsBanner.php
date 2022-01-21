<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Config;

class ProductsBanner extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = [
        'image_url',
    ];

    private $uploadsFolder;
    private $bannerFolder;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->uploadsFolder = Config::get('rayogas.uploadsFolder');
        $this->bannerFolder = Config::get('rayogas.products.banner');
    }

    public function getFolderId()
    {
        return ($this->id < 10)?sprintf('%02d', $this->id):$this->id;
    }

    public function getImageUrlAttribute()
    {
        return asset($this->uploadsFolder . '/' . $this->bannerFolder . '/' . $this->getFolderId() . '/' . $this->image);
    }
}
