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
 * @property string $ficha_Id_ficha
 * @property int $Id_Rol
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Role $role
 * @property Ficha $ficha
 * @property Collection|Asesorium[] $asesoria
 * @property Collection|Reservaelemento[] $reservaelementos
 * @property Collection|Reservaespacio[] $reservaespacios
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
		'Id_Rol' => 'int',
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
		'ficha_Id_ficha',
		'Id_Rol',
		'created_AT',
		'update_AT'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'Id_Rol');
	}

	public function ficha()
	{
		return $this->belongsTo(Ficha::class, 'ficha_Id_ficha');
	}

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
}
