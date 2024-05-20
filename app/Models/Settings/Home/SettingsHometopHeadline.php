<?php

namespace App\Models\Settings\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsHometopHeadline extends Model
{
    use HasFactory;

    protected $table = "setting_home_topheadline";

    protected $fillable = [
        "image",
        "headline",
        "subheadline",
        "created_at",
        "updated_at"
    ];
}
