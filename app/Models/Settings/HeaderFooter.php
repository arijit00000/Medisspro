<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderFooter extends Model
{
    use HasFactory;

    protected $table = "headerfooter";
    protected $primaryKey = "headerfooter_id";

    protected $fillable = ([
        "mobile",
        "email",
        "corporate_office",
        "branch_office",
        "web",
        "facebook",
        "instagram",
        "linkdin",
        "twitter",
        "footer_text"
    ]);
}
