<?php
namespace App\Models;

use App\Support\PatrimonioTrait;
use Cac\Model\Model;

class Periferico extends Model {

    use PatrimonioTrait;

    protected $table      = "Perifericos";

}