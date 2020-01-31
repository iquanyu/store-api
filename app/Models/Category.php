<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
  use NodeTrait;

  protected $fillable = [
      'name', 'slug', 'lft', 'rgt', 'depth', 'parent_id'
  ];

  public function getLftName()
  {
      return 'lft';
  }

  public function getRgtName()
  {
      return 'rgt';
  }
}