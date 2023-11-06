<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class customer extends Model
{
    // use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'customers';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'mileage',
        'address',
        'city',
        'postcode',
    ];

  

   
}
