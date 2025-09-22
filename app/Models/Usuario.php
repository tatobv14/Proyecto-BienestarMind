<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $Id_Usuario
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Documento
 * @property string $Correo
 * @property string $Genero
 * @property string $Telefono
 * @property Carbon $Fecha_de_Nacimiento
 * @property string $Contraseña
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Collection|Asesorium[] $asesoria
 * @property Collection|Reservaelemento[] $reservaelementos
 * @property Collection|Reservaespacio[] $reservaespacios
 * @property Collection|Ficha[] $fichas
 * @property Collection|Role[] $roles
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'Id_Usuario';
	public $timestamps = false;

	protected $casts = [
		'Fecha_de_Nacimiento' => 'datetime',
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Nombres',
		'Apellidos',
		'Documento',
		'Correo',
		'Genero',
		'Telefono',
		'Fecha_de_Nacimiento',
		'Contraseña',
		'created_AT',
		'update_AT'
	];

	public function asesoria()
	{
		return $this->hasMany(Asesorium::class, 'Id_Usuario_Asesor');
	}

	public function reservaelementos()
	{
		return $this->hasMany(Reservaelemento::class, 'Id_Usuario');
	}

	public function reservaespacios()
	{
		return $this->hasMany(Reservaespacio::class, 'Id_Usuario');
	}

	public function fichas()
	{
		return $this->belongsToMany(Ficha::class, 'usuario_ficha', 'Id_Usuario', 'Id_ficha')
					->withPivot('Id_usuario_ficha', 'created_AT', 'update_AT');
	}

	public function roles()
	{
		return $this->belongsToMany(Role::class, 'usuario_roles', 'Id_Usuario', 'Id_Rol')
					->withPivot('Id_usuario_roles', 'created_AT', 'update_AT');
	}
}
