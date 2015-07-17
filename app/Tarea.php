<?php
namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\HomeController;

    
class Tarea extends Model {
   protected $table = 'tasks';

   protected $fillable = ['description', 'dateE', 'id_proyecto','id_usuario','id_status'];
}