<?php

namespace App\Models\Career;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Career\Career;

class CareerApply extends Model
{
    use HasFactory;

    protected $primaryKey = 'career_apply';

    protected $table = 'careerapply';

    protected $fillable = [
        'career_id',
        'name',
        'email',
        'mobile',
        'experience',
        'status',
        'doc',
        'message'
    ];

    public function addCareer(){
        return $this->hasOne(Career::class, 'career_id', 'career_id');
    }
}
