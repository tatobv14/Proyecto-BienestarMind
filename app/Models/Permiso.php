<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Permiso
 * 
 * @property int $Id_Permiso
 * @property string $Descripcion
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Collection|Role[] $roles
 *
 * @package App\Models
 */
class Permiso extends Model
{
	protected $table = 'permisos';
	protected $primaryKey = 'Id_Permiso';
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

	public function roles()
	{
		return $this->belongsToMany(Role::class, 'roles_permisos', 'Id_Permiso', 'Id_Rol')
					->withPivot('Id_roles_permisos', 'created_AT', 'update_AT');
	}
}
