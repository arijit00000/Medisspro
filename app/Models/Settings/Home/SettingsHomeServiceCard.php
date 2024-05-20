<?php

namespace App\Models\Settings\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsHomeServiceCard extends Model
{
    use HasFactory;

    protected $table = "setting_home_service_card";

    protected $fillable = [
        "image",
        "headline",
        "content",
        "created_at",
        "updated_at"
    ];
}
