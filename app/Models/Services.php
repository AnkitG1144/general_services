<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    public $fillable = ['name', 'category_id', 'contact_no'];
    public $timestamps = false;
}
