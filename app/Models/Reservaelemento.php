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
 * @property Carbon $Fecha_Reserva
 * @property string $Descripcion_Reserva
 * @property string|null $Id_ficha
 * @property int|null $Id_Usuario
 * @property int|null $Id_Elemento
 * @property Carbon $created_AT
 * @property Carbon $update_AT
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
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Fecha_Reserva',
		'Descripcion_Reserva',
		'Id_ficha',
		'Id_Usuario',
		'Id_Elemento',
		'created_AT',
		'update_AT'
	];

	public function ficha()
	{
		return $this->belongsTo(Ficha::class, 'Id_ficha');
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
