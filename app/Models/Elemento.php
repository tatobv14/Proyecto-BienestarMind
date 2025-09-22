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
 * @property int $Id_Categoria
 * @property string $Nombre_Elemento
 * @property string $Estado_Elemento
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property CategoriaElemento $categoria_elemento
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
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Id_Categoria',
		'Nombre_Elemento',
		'Estado_Elemento',
		'created_AT',
		'update_AT'
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
