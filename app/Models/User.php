<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "user_icon_id",
        "name",
        "user_name",
        "email",
        "phone",
        "password",
        "google_id",
        "facebook_id"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        "google_id",
        "facebook_id",
        "password",
        "remember_token"
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            "created_at" => 'datetime',
            "updated_at" => 'datetime',
            'password' => 'hashed'
        ];
    }

    public function setting() {
        return $this->hasOne(Setting::class);
    }

    public function userIcon() {
        return $this->belongsTo(UserIcon::class);
    }

    public function contents() {
        return $this->hasMany(Content::class);
    }

    public function publicTaggedContents() {
        return $this->belongsToMany(Content::class, "public_tagged_contents");
    }

    public function hugSentContents() {
        return $this->belongsToMany(Content::class, "sent_hug_contents");
    }

    public function heartSentContents() {
        return $this->belongsToMany(Content::class, "sent_heart_contents");
    }
}
