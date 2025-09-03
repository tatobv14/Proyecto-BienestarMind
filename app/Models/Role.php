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
 * @property string|null $Descripcion
 * @property Carbon|null $Created_AT
 * @property Carbon|null $Update_AT
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
		'Created_AT' => 'datetime',
		'Update_AT' => 'datetime'
	];

	protected $fillable = [
		'Descripcion',
		'Created_AT',
		'Update_AT'
	];

	public function permisos()
	{
		return $this->belongsToMany(Permiso::class, 'roles_permisos', 'Id_Rol', 'Id_Permiso')
					->withPivot('Id_roles_permisos');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'Id_Rol');
	}
}
