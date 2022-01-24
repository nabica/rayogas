<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Config;

class BlogPost extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = [
        'thumb_image_url',
        'image_url',
    ];

    private $uploadsFolder;
    private $featuresFolder;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->uploadsFolder = Config::get('rayogas.uploadsFolder');
        $this->featuresFolder = Config::get('rayogas.blog.posts');
    }

    public function getFolderId()
    {
        return ($this->id < 10)?sprintf('%02d', $this->id):$this->id;
    }

    public function getThumbImageUrlAttribute()
    {
        return asset($this->uploadsFolder . '/' . $this->featuresFolder . '/' . $this->getFolderId() . '/' . $this->thumb_image);
    }

    public function getImageUrlAttribute()
    {
        return asset($this->uploadsFolder . '/' . $this->featuresFolder . '/' . $this->getFolderId() . '/' . $this->image);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
