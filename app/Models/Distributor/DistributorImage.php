<?php

namespace App\Models\Distributor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DistributorImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'distributorimg_id';

    protected $table = 'distributorimage';

    protected $fillable = [
        'distributor_img'
    ];
}
