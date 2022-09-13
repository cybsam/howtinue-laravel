<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersInfoAdmin extends Model
{

    protected $fillable = [
        'changeFullName',
        'UserAbout',
        'company',
        'jobTitle',
        'country',
        'address',
        'phone',
        'twitter',
        'facebook',
        'instagram',
        'linkedin',
    ];

    public function ProfileDetails(){
        return $this->belongsTo('UsersInfo');
    }
    use HasFactory;
}
