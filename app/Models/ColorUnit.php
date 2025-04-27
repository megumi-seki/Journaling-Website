<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorUnit extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name'];

    public function setting() {
        return $this->hasMany(Setting::class);
    }

}
