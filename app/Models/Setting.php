<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "public_mode",
        "screen_mode",
        "color_unit_id",
        "font_size_id",
        "font_style_id"
    ];

    public function colorUnit() {
        return $this->belongsTo(ColorUnit::class);
    }

    public function fontSize() {
        return $this->belongsTo(FontSize::class);
    }

    public function fontStyle() {
        return $this->belongsTo(FontStyle::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
