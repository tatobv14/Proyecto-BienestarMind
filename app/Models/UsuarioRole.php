<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioRole
 * 
 * @property int $Id_usuario_roles
 * @property int $Id_Usuario
 * @property int $Id_Rol
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Usuario $usuario
 * @property Role $role
 *
 * @package App\Models
 */
class UsuarioRole extends Model
{
	protected $table = 'usuario_roles';
	protected $primaryKey = 'Id_usuario_roles';
	public $timestamps = false;

	protected $casts = [
		'Id_Usuario' => 'int',
		'Id_Rol' => 'int',
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Id_Usuario',
		'Id_Rol',
		'created_AT',
		'update_AT'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Id_Usuario');
	}

	public function role()
	{
		return $this->belongsTo(Role::class, 'Id_Rol');
	}
}
