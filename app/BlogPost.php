<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    /**
     * @var string The table this model is tied to
     */
    protected $table = "blog_posts";

    /**
     * @var array The database columns that are mass assignable, a whitelist
     */
    protected $fillable = ["title", "body", "user_id"];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
