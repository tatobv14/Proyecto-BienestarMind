<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Programa
 * 
 * @property int $Id_Programa
 * @property string $Nombre_programa
 * @property string $Descripcion
 * @property Carbon $Created_AT
 * @property Carbon $Update_AT
 * 
 * @property Collection|Ficha[] $fichas
 *
 * @package App\Models
 */
class Programa extends Model
{
	protected $table = 'programas';
	protected $primaryKey = 'Id_Programa';
	public $timestamps = false;

	protected $casts = [
		'Created_AT' => 'datetime',
		'Update_AT' => 'datetime'
	];

	protected $fillable = [
		'Nombre_programa',
		'Descripcion',
		'Created_AT',
		'Update_AT'
	];

	public function fichas()
	{
		return $this->hasMany(Ficha::class, 'Id_Programa');
	}
}
