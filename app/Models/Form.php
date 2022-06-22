<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proverka;

class Form extends Model
{
    use HasFactory;
    protected $fillable = ['urlname', 'check_povtor'];

    public function proverkaInterval(){
      return $this->hasMany(Proverka::class, 'form_id');
    }
}
