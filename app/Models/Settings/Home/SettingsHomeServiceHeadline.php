<?php

namespace App\Models\Settings\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsHomeServiceHeadline extends Model
{
    use HasFactory;

    protected $table = "setting_home_service_headline";

    protected $fillable = [
        "headline",
        "subheadline",
        "created_at",
        "updated_at"
    ];
}
