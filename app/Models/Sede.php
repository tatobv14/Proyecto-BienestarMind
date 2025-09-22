<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sede
 * 
 * @property int $Id_Sede
 * @property string $Nombre_sede
 * @property string $Telefono_sede
 * @property string $Direccion_sede
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Collection|Espacio[] $espacios
 *
 * @package App\Models
 */
class Sede extends Model
{
	protected $table = 'sede';
	protected $primaryKey = 'Id_Sede';
	public $timestamps = false;

	protected $casts = [
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Nombre_sede',
		'Telefono_sede',
		'Direccion_sede',
		'created_AT',
		'update_AT'
	];

	public function espacios()
	{
		return $this->hasMany(Espacio::class, 'Id_Sede');
	}
}
