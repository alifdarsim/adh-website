<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;
    protected $table = 'submenu';
    protected $fillable = [
        'main_menu_tbl_id',
        'sub_menu_title',
    ];
}
