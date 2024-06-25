<?php

namespace App\Models\Distributor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DistributorList extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'distribotorlist_id';

    protected $table = 'distributorlist';

    protected $fillable = [
        'list_img',
        'list_name'
    ];
}
