<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ficha
 * 
 * @property string $Id_ficha
 * @property string $descripcion
 * @property string $jornada_ficha
 * @property int $Id_Programa
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Programa $programa
 * @property Collection|Asesorium[] $asesoria
 * @property Collection|Reservaelemento[] $reservaelementos
 * @property Collection|Reservaespacio[] $reservaespacios
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Ficha extends Model
{
	protected $table = 'ficha';
	protected $primaryKey = 'Id_ficha';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Id_Programa' => 'int',
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Id_ficha',
		'descripcion',
		'jornada_ficha',
		'Id_Programa',
		'created_AT',
		'update_AT'
	];

	public function programa()
	{
		return $this->belongsTo(Programa::class, 'Id_Programa');
	}

	public function asesoria()
	{
		return $this->hasMany(Asesorium::class, 'ficha_Id_ficha');
	}

	public function reservaelementos()
	{
		return $this->hasMany(Reservaelemento::class, 'Id_ficha');
	}

	public function reservaespacios()
	{
		return $this->hasMany(Reservaespacio::class, 'Id_ficha');
	}

	public function usuarios()
	{
		return $this->belongsToMany(Usuario::class, 'usuario_ficha', 'Id_ficha', 'Id_Usuario')
					->withPivot('Id_usuario_ficha', 'created_AT', 'update_AT');
	}
}
