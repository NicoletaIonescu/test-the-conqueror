<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bundel extends Model
{
    protected $fillable = ['user_id', 'challenge_id', 'status'];

}
