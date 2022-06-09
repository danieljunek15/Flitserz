<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelReview extends Model
{
    use HasFactory;

    public $tableReview = "model_reviews";

    protected $fillable = [
        'name',
        'rating',
        'content',
        'status'
    ];
}
