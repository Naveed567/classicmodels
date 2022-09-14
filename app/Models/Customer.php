<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customerName', 
        'contactLastName',
        'contactFirstName', 
        'phone', 
        'addressLine1', 
        'addressLine2', 
        'city', 
        'state', 
        'postalCode', 
        'country', 
        'salesRepEmployeeNumber', 
        'creditLimit',
    ];
}
