<?php

namespace App\Models\Glp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Config;

class GlpRecommendationPdf extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = [
        'file_url',
    ];

    private $uploadsFolder;
    private $bannerFolder;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->uploadsFolder = Config::get('rayogas.uploadsFolder');
        $this->bannerFolder = Config::get('rayogas.glp.recommendationPdfs');
    }

    public function getFolderId()
    {
        return ($this->id < 10)?sprintf('%02d', $this->id):$this->id;
    }

    public function getFileUrlAttribute()
    {
        return asset($this->uploadsFolder . '/' . $this->bannerFolder . '/' . $this->getFolderId() . '/' . $this->file);
    }
}
