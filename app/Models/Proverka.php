<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Form;

class Proverka extends Model
{
    use HasFactory;
    protected $fillable = ['check_interval', 'form_id'];
    protected $primaryKey = 'id';

    public function formProverka(){
      return $this->belongsTo(Form::class, 'form_id');
    }
}
