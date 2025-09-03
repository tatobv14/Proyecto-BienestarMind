<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservaelemento
 * 
 * @property int $Id_ReservaElemento
 * @property Carbon|null $Fecha_Reserva
 * @property string|null $Descripcion_Reserva
 * @property string|null $Ficha
 * @property int|null $Id_Usuario
 * @property int|null $Id_Elemento
 * @property Carbon|null $Created_AT
 * @property Carbon|null $Update_AT
 * 
 * @property Ficha|null $ficha
 * @property Usuario|null $usuario
 * @property Elemento|null $elemento
 *
 * @package App\Models
 */
class Reservaelemento extends Model
{
	protected $table = 'reservaelementos';
	protected $primaryKey = 'Id_ReservaElemento';
	public $timestamps = false;

	protected $casts = [
		'Fecha_Reserva' => 'datetime',
		'Id_Usuario' => 'int',
		'Id_Elemento' => 'int',
		'Created_AT' => 'datetime',
		'Update_AT' => 'datetime'
	];

	protected $fillable = [
		'Fecha_Reserva',
		'Descripcion_Reserva',
		'Ficha',
		'Id_Usuario',
		'Id_Elemento',
		'Created_AT',
		'Update_AT'
	];

	public function ficha()
	{
		return $this->belongsTo(Ficha::class, 'Ficha');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Id_Usuario');
	}

	public function elemento()
	{
		return $this->belongsTo(Elemento::class, 'Id_Elemento');
	}
}
