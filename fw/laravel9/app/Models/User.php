<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function LoginHistory()
    {
        return $this->hasMany(LoginHistory::class, 'user_id', 'id');
    }
}
