<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemotiveJob extends Model
{ 

    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'remotive_jobs';

    // Define which attributes are mass assignable
    protected $fillable = [
        'title',
        'company',
        'location',
        'url',
        'description',
    ];
}
