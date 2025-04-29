<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "title",
        "content_text",
        "tag"
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function hashtags() {
        return $this->belongsToMany(Hashtag::class, "set_hashtags");
    }

    public function publicTaggedUsers() {
        return $this->belongsToMany(User::class,"public_tagged_contents");
    }

    public function sentHugUsers() {
        return $this->belongsToMany(User::class, "sent_hug_contents");
    }

    public function sentHeartUsers() {
        return $this->belongsToMany(User::class, "sent_hearts_contents");
    }
}
