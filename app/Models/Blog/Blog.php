<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use App\Services\HtmlSanitizerService;

class Blog extends Model
{
    use HasFactory;
    protected $uploadsFolder;
    protected $blogpostfolder;
    protected $fillable = [
        'title',
        'body_blog',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->uploadsFolder = Config::get('rayogas.uploadsFolder');
        $this->blogpostfolder = Config::get('rayogas.blog.posts');
    }
    protected $appends = [
        'thumb_image_url',
        'image_url',
    ];
    public function setBodyBlogAttribute($value)
    {
        if (!empty($value)) {
            $sanitizer = app(HtmlSanitizerService::class);
            $this->attributes['body_blog'] = $sanitizer->sanitizeBlogContent($value);
        } else {
            $this->attributes['body_blog'] = $value;
        }
    }
    public function getFolderId()
    {
        return ($this->id < 10) ? sprintf('%02d', $this->id) : $this->id;
    }
    public function getImageUrlAttribute()
    {
        return asset($this->uploadsFolder . '/' . $this->blogpostfolder . $this->getFolderId() . '/' . $this->card_image);
    }
}
