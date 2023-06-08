<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $fillable = ['invoice_number','user_id','date','amount','category'];
    protected $primaryKey = 'invoice_number';
}
