<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeGroup extends Model
{
  protected $fillable = [
      'name', 'is_user_defined'
  ];

  public function attributes(){
    return $this->belongsToMany('App\Models\Attribute', 'attribute_group_mappings', 'attribute_group_id', 'attribute_id');
  }


  public function attributeFamily(){
    return $this->belongsToMany('App\Models\AttributeFamily');
  }
}
