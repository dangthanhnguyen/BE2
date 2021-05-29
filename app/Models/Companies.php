<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Companies extends Model
{
    protected $table = 'companies';

    public function search($value,$id){
        $search_query = '%'.$value.'%';
        return self::where('company_name','like',$search_query) ->orwhere('company_phone','like',$search_query)->where('category_id','=',$id)->paginate(20);
    }

    public function trainersCompanies() {
        return $this->hasOne(Trainers::class,'company_id','company_id');
    }

    public function companiesCategory(){
        return $this->hasMany(Category::class,'category_id','category_id');
    }
}
