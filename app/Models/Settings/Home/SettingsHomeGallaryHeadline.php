<?php

namespace App\Models\Settings\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsHomeGallaryHeadline extends Model
{
    use HasFactory;

     protected $table = "setting_home_gallary_headline";

    protected $fillable = [
        "headline",
        "subheadline",
        "created_at",
        "updated_at"
    ];
}
