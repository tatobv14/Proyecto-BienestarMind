<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RolesPermiso
 * 
 * @property int $Id_roles_permisos
 * @property int $Id_Rol
 * @property int $Id_Permiso
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Role $role
 * @property Permiso $permiso
 *
 * @package App\Models
 */
class RolesPermiso extends Model
{
	protected $table = 'roles_permisos';
	protected $primaryKey = 'Id_roles_permisos';
	public $timestamps = false;

	protected $casts = [
		'Id_Rol' => 'int',
		'Id_Permiso' => 'int',
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Id_Rol',
		'Id_Permiso',
		'created_AT',
		'update_AT'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'Id_Rol');
	}

	public function permiso()
	{
		return $this->belongsTo(Permiso::class, 'Id_Permiso');
	}
}
