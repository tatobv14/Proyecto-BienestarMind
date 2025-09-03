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
 * @property int|null $Id_Sede
 * @property string|null $Nombre_del_espacio
 * @property Carbon|null $Created_AT
 * @property Carbon|null $Update_AT
 * 
 * @property Sede|null $sede
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
		'Created_AT' => 'datetime',
		'Update_AT' => 'datetime'
	];

	protected $fillable = [
		'Id_Sede',
		'Nombre_del_espacio',
		'Created_AT',
		'Update_AT'
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
