<?php

namespace App\Models\Career;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'career_id';

    protected $table = 'career';

    protected $fillable = [
        'career_name',
        'career_description'
    ];
}
