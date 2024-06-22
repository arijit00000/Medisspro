<?php

namespace App\Models\OurService;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    use HasFactory;

    protected $primaryKey = 's_card_id';

    protected $table = 'ourservice';

    protected $fillable = [
        'service_img',
        'service_headline',
        'service_content'
    ];
}
