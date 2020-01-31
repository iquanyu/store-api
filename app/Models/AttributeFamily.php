<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeFamily extends Model
{
  protected $fillable = [
      'code', 'name', 'status', 'is_user_defined'
  ];

  public function attributeGroups(){
    return $this->hasMany('App\Models\AttributeGroup');
  }
}
