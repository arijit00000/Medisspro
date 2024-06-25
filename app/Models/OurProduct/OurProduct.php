<?php

namespace App\Models\OurProduct;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurProduct extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'product_id';

    protected $table = 'ourproduct';

    protected $fillable = [
        'product_img1',
        'product_img2',
        'product_name',
        'product_details'
    ];
}
