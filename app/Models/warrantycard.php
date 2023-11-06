<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class warrantycard extends Model
{
     use HasFactory;
     // use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */
    protected $table = 'warrantycards';
    protected $fillable = [
        'customername',
        'vehicalnumber',
        'vendorname',
        'brachcode',
        'email',
        'phonenumber',
        'chassinumber',
        'carmodel',
        'service',
        'ppfrollnumber',
        'frontimage',
        'backimage',
        'rightimage',
        'leftimage',
        'start_date',
        'end_date'
    ];

   
}
