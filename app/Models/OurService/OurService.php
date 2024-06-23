<?php

namespace App\Models\OurService;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurService extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 's_card_id';

    protected $table = 'ourservice';

    protected $fillable = [
        'service_img',
        'service_headline',
        'service_content'
    ];
}
