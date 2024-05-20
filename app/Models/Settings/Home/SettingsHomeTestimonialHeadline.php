<?php

namespace App\Models\Settings\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsHomeTestimonialHeadline extends Model
{
    use HasFactory;

    protected $table = "setting_home_testimonial_headline";

    protected $fillable = [
        "headline",
        "subheadline",
        "created_at",
        "updated_at"
    ];
}
