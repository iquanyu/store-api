<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeOption extends Model
{
  protected $fillable = [
      'name'
  ];

  public function attribute(){
    return $this->beLongsTo('App\Models\Attribute');
  }
}
