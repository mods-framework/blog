<?php

namespace Mods\Blog\Models;

use Carbon\Carbon;
use Mods\Database\Eloquent\Model;

class Post extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog_posts';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'published_at',
    ];


    public function getTitle()
    {
        return $this->attributes['title'];
    }
}