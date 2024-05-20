<?php

namespace App\Models\Settings\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsHomeHeaderFooter extends Model
{
    use HasFactory;

    protected $table = "setting_header_footer";

    protected $fillable = [
        "facebook",
        "linkdin",
        "instragram",
        "twitter",
        "mobile",
        "email",
        "home_address",
        "office_address",
        "website",
        "created_at",
        "updated_at"
    ];
}
