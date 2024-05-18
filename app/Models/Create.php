<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'repuired',
        'topic' => 'topic',
        'comment' => '',
    );
    use HasFactory;
}
