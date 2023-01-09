<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ScopePerson implements Scope
{
  public function apply(Builder $buildfer, Model $model)
  {
    $buildfer->where('age', '>', 15);
  }
}