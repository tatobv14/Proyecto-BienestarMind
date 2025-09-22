<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaElemento
 * 
 * @property int $Id_Categoria
 * @property string $Descripcion
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Collection|Elemento[] $elementos
 *
 * @package App\Models
 */
class CategoriaElemento extends Model
{
	protected $table = 'categoria_elementos';
	protected $primaryKey = 'Id_Categoria';
	public $timestamps = false;

	protected $casts = [
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Descripcion',
		'created_AT',
		'update_AT'
	];

	public function elementos()
	{
		return $this->hasMany(Elemento::class, 'Id_Categoria');
	}
}
