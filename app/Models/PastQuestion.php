<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "year",
        "description",
        "file",
        "subject_id"
    ];

    public function subject(){
        return $this->hasOne(Subject::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}