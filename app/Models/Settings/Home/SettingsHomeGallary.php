<?php

namespace App\Models\Settings\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsHomeGallary extends Model
{
    use HasFactory;

    protected $table = "setting_home_gallary";

    protected $fillable = [
        "gallary_img"
    ];
}
