<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'absent_from', 'absent_to', 'cutoff', 'attachment'];

    public function user(){
        return $this->belongsTo(user::class);
    }

}
