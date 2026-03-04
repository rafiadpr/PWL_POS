<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    protected $table = 'm_level'; 
    protected $primaryKey = 'level_id'; 

    public function user()
    {
        return $this->hasMany(UserModel::class);
    }
}