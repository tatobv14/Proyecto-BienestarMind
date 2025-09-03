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
 * @property string|null $Descripcion
 * @property Carbon|null $Created_AT
 * @property Carbon|null $Update_AT
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
		'Created_AT' => 'datetime',
		'Update_AT' => 'datetime'
	];

	protected $fillable = [
		'Descripcion',
		'Created_AT',
		'Update_AT'
	];

	public function roles()
	{
		return $this->belongsToMany(Role::class, 'roles_permisos', 'Id_Permiso', 'Id_Rol')
					->withPivot('Id_roles_permisos');
	}
}
