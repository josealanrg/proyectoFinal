<?php
namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\HomeController;
	
class Tarea extends Model {
   protected $table = 'tareas';

           public static function getTareass(){
        	return self::join('proyectos','tareas.id_proyecto','=','proyectos.id_proyecto')
        			->join('usuarios','tareas.id_usuario','=','usuarios.id_usuario')
        			->join('estatus','tareas.id_estatus','=','estatus.id_estatus')

        			->select('tareas.id_tarea','tareas.descripcion','tareas.fechaEntrega','proyectos.nombre','estatus.estatus','usuarios.usuario as nombre_usuario')
        			->get();
        		}
}