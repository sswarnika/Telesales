<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'device';
    protected $fillable = ['serial number','type','version'];

    use HasFactory;
}
