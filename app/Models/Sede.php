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
 * @property string|null $Nombre_sede
 * @property string|null $Telefono_sede
 * @property string|null $Direccion_sede
 * @property Carbon|null $Created_AT
 * @property Carbon|null $Update_AT
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
		'Created_AT' => 'datetime',
		'Update_AT' => 'datetime'
	];

	protected $fillable = [
		'Nombre_sede',
		'Telefono_sede',
		'Direccion_sede',
		'Created_AT',
		'Update_AT'
	];

	public function espacios()
	{
		return $this->hasMany(Espacio::class, 'Id_Sede');
	}
}
