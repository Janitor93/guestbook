<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    // created_at || createdAt = getCreatedAtAttribute
    public function getCreatedAtAttribute($date) {
      return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s / d.m.Y');
    }
}
