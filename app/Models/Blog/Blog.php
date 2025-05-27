<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body_blog',
    ];


    public function getFolderId()
    {
        return ($this->id < 10) ? sprintf('%02d', $this->id) : $this->id;
    }
}
