<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'phone_number',
        'fax_number',
        'date_of_birth',
        'address',
        'city',
        'county',
        'state',
        'country',
        'zip_code'
    ];
}
