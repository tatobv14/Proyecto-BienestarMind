<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Elemento
 * 
 * @property int $Id_Elemento
 * @property int|null $Id_Categoria
 * @property string|null $Nombre_Elemento
 * @property int|null $Estado_Elemento
 * @property Carbon|null $Created_AT
 * @property Carbon|null $Update_AT
 * 
 * @property CategoriaElemento|null $categoria_elemento
 * @property Collection|Reservaelemento[] $reservaelementos
 *
 * @package App\Models
 */
class Elemento extends Model
{
	protected $table = 'elementos';
	protected $primaryKey = 'Id_Elemento';
	public $timestamps = false;

	protected $casts = [
		'Id_Categoria' => 'int',
		'Estado_Elemento' => 'int',
		'Created_AT' => 'datetime',
		'Update_AT' => 'datetime'
	];

	protected $fillable = [
		'Id_Categoria',
		'Nombre_Elemento',
		'Estado_Elemento',
		'Created_AT',
		'Update_AT'
	];

	public function categoria_elemento()
	{
		return $this->belongsTo(CategoriaElemento::class, 'Id_Categoria');
	}

	public function reservaelementos()
	{
		return $this->hasMany(Reservaelemento::class, 'Id_Elemento');
	}
}
