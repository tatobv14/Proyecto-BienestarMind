<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Espacio
 * 
 * @property int $Id_Espacio
 * @property int $Id_Sede
 * @property string $Nombre_del_espacio
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Sede $sede
 * @property Collection|Reservaespacio[] $reservaespacios
 *
 * @package App\Models
 */
class Espacio extends Model
{
	protected $table = 'espacios';
	protected $primaryKey = 'Id_Espacio';
	public $timestamps = false;

	protected $casts = [
		'Id_Sede' => 'int',
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Id_Sede',
		'Nombre_del_espacio',
		'created_AT',
		'update_AT'
	];

	public function sede()
	{
		return $this->belongsTo(Sede::class, 'Id_Sede');
	}

	public function reservaespacios()
	{
		return $this->hasMany(Reservaespacio::class, 'Id_Espacio');
	}
}
