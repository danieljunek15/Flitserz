<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelContactform extends Model
{
    use HasFactory;

    public $table = "contact_form";

    protected $fillable = [
        'name',
        'email',
        'telnummer',
        'vragen',
        'gemeente',
        'status'
    ];
}
