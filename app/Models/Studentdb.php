<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studentdb extends Model
{
    protected $table = 'tb_student';
    protected $fillable = [
        'stdid',
        'stdname',
        'major',
        'telephone',
        'stdimg'
    ];
}
