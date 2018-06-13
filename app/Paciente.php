<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model {
    
    public $timestamps = false;
/*    protected $table = 'produtos';*/
    protected $fillable = array('nome', 'cpf', 'tel');

}
