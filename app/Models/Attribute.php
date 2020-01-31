<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
  protected $fillable = [
      'code', 'name', 'type', 'validation', 'is_required', 'is_unique', 'is_user_defined'
  ];

  public function attributeGroup(){
    return $this->belongsToMany('App\Models\AttributeGroup', 'attribute_group_mappings', 'attribute_id', 'attribute_group_id');
  }

  public function attributeOptions(){
    return $this->hasMany('App\Models\AttributeOption');
  }
}
