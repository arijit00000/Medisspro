<?php

namespace App\Models\Distributor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DistributorHeading extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'distributorheading_id';

    protected $table = 'distributorheading';

    protected $fillable = [
        'distributor_headline',
        'distributor_subheadline'
    ];
}
