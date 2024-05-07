<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class Resources extends Model
{
    protected $table = 'resources';
    protected $guarded = [];
}
