<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $Id_Rol
 * @property string $Descripcion
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Collection|Permiso[] $permisos
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'Id_Rol';
	public $timestamps = false;

	protected $casts = [
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Descripcion',
		'created_AT',
		'update_AT'
	];

	public function permisos()
	{
		return $this->belongsToMany(Permiso::class, 'roles_permisos', 'Id_Rol', 'Id_Permiso')
					->withPivot('Id_roles_permisos', 'created_AT', 'update_AT');
	}

	public function usuarios()
	{
		return $this->belongsToMany(Usuario::class, 'usuario_roles', 'Id_Rol', 'Id_Usuario')
					->withPivot('Id_usuario_roles', 'created_AT', 'update_AT');
	}
}
