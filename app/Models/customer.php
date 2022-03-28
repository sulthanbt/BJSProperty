<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table='customer';
    protected $primaryKey='id_pembeli';
    protected $fillable=[
        'id_status',
    ];
    // public $timestamps=false;
}
