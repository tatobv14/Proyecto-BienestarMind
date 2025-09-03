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
 * @property Carbon|null $Fecha_Reserva
 * @property string|null $Motivo_Reserva
 * @property string|null $Ficha
 * @property int|null $Id_Usuario
 * @property int|null $Id_Espacio
 * @property Carbon|null $Created_AT
 * @property Carbon|null $Update_AT
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
		'Created_AT' => 'datetime',
		'Update_AT' => 'datetime',
		'Duracion' => 'int'
	];

	protected $fillable = [
		'Fecha_Reserva',
		'Motivo_Reserva',
		'Ficha',
		'Id_Usuario',
		'Id_Espacio',
		'Created_AT',
		'Update_AT',
		'Duracion'
	];

	public function ficha()
	{
		return $this->belongsTo(Ficha::class, 'Ficha');
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
