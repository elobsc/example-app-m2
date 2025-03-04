<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = ['first_name', 'last_name', 'birth_date', 'adress', 'groups_id'];


    public function group()
    {
        return $this->belongsTo(Group::class, 'groups_id');
    }
}

