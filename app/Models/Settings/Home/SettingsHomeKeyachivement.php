<?php

namespace App\Models\Settings\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsHomeKeyachivement extends Model
{
    use HasFactory;

    protected $table = "setting_home_keyachivement";

    protected $fillable = [
        "heading_1",
        "subheading_1",
        "heading_2",
        "subheading_2",
        "image",
        "heading_3",
        "subheading_3",
        "heading_4",
        "subheading_4",
        "created_at",
        "updated_at"
    ];
}
