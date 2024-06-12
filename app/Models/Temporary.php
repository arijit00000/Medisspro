<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporary extends Model
{
    use HasFactory;

    Protected $table = "temprary_table";
    protected $primaryKey = "temporary_id";

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'text',
        'service'
    ];
}
