<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservaespacio
 * 
 * @property int $Id_ReservaEspacio
 * @property Carbon $Fecha_Reserva
 * @property string $Motivo_Reserva
 * @property string|null $Id_ficha
 * @property int|null $Id_Usuario
 * @property int|null $Id_Espacio
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * @property int|null $Duracion
 * 
 * @property Ficha|null $ficha
 * @property Usuario|null $usuario
 * @property Espacio|null $espacio
 *
 * @package App\Models
 */
class Reservaespacio extends Model
{
	protected $table = 'reservaespacios';
	protected $primaryKey = 'Id_ReservaEspacio';
	public $timestamps = false;

	protected $casts = [
		'Fecha_Reserva' => 'datetime',
		'Id_Usuario' => 'int',
		'Id_Espacio' => 'int',
		'created_AT' => 'datetime',
		'update_AT' => 'datetime',
		'Duracion' => 'int'
	];

	protected $fillable = [
		'Fecha_Reserva',
		'Motivo_Reserva',
		'Id_ficha',
		'Id_Usuario',
		'Id_Espacio',
		'created_AT',
		'update_AT',
		'Duracion'
	];

	public function ficha()
	{
		return $this->belongsTo(Ficha::class, 'Id_ficha');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Id_Usuario');
	}

	public function espacio()
	{
		return $this->belongsTo(Espacio::class, 'Id_Espacio');
	}
}
