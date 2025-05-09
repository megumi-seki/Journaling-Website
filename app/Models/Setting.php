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
        "font_size",
        "font_style_id"
    ];

    protected $attributes = [
        "public_mode" => 0,
        "screen_mode" => 0,
        "color_unit_id" => 1,
        "font_size" => 3,
        "font_style_id" => 1
    ];

    public function colorUnit() {
        return $this->belongsTo(ColorUnit::class);
    }

    public function fontStyle() {
        return $this->belongsTo(FontStyle::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
