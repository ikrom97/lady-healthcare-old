<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
  use HasFactory, Sluggable;

  public function sluggable(): array
  {
    return [
      'slug' => [
        'source' => 'title',
      ]
    ];
  }

  public function direction()
  {
    return $this->belongsTo(Direction::class, 'direction_id');
  }

  public function releaseForm()
  {
    return $this->belongsTo(ReleaseForm::class, 'release_form_id');
  }
}
