<?php

namespace App\Models\Settings\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsHomeBanner extends Model
{
    use HasFactory;

    protected $table = "setting_home_banner";

    protected $fillable = [
        "banner_img_1",
        "banner_img_2",
        "headline",
        "subheadline",
        "content",
        "link",
        "created_at",
        "updated_at"
    ];
}
