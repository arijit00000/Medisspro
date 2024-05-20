<?php

namespace App\Models\Settings\ContactUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsContactHeadline extends Model
{
    use HasFactory;

    protected $table = "settings_contact_headlines";

    protected $fillable = [
        "headline",
        "subheadline",
        "created_at",
        "updated_at"
    ];
}
