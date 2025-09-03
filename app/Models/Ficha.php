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
 * @property Carbon $Created_AT
 * @property Carbon $Update_AT
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
		'Created_AT' => 'datetime',
		'Update_AT' => 'datetime'
	];

	protected $fillable = [
		'descripcion',
		'jornada_ficha',
		'Id_Programa',
		'Created_AT',
		'Update_AT'
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
		return $this->hasMany(Reservaelemento::class, 'Ficha');
	}

	public function reservaespacios()
	{
		return $this->hasMany(Reservaespacio::class, 'Ficha');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'ficha_Id_ficha');
	}
}
