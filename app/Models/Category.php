<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $table = 'category';

    public function categoriesCompanies() {
        return $this->hasMany(Companies::class,'category_id','category_id');
    }
}
