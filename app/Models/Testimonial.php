<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'testimonials';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $guarded = ['id'];

}
