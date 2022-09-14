<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    use HasFactory;
    protected $fillable = [ 'city', 'phone', 'addressLine1', 'addressLine2', 'state', 'country', 'postalCode', 'territory',];
}
