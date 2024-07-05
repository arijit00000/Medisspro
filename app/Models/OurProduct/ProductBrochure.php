<?php

namespace App\Models\OurProduct;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductBrochure extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'brochure_id';

    protected $table = 'productbrochure';

    protected $fillable = [
        'brochure_name'
    ];
}
