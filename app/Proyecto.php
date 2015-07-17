<?php
namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\HomeController;

    
class Proyecto extends Model {
   protected $table = 'proyectos';

   protected $fillable = ['name', 'description', 'dateE'];
}