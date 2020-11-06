<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'sub_categories';

    public function category()
    {
        return $this->hasOne('App\Models\Category');
    }
}
