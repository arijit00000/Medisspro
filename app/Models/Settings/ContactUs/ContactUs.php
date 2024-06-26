<?php

namespace App\Models\Settings\ContactUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OurService\OurService;

class ContactUs extends Model
{
    
    use HasFactory;

    protected $primaryKey = 'contactus_id';

    protected $table = 'contactus';

    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'mobile',
        'inquire',
        'form_type',
        's_card_id'
    ];

    public function addServiceCard(){
        return $this->hasOne(OurService::class, 's_card_id', 's_card_id');
    }
}
