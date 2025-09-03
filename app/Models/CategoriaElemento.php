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
 * @property string|null $Descripcion
 * @property Carbon|null $Created_AT
 * @property Carbon|null $Update_AT
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
		'Created_AT' => 'datetime',
		'Update_AT' => 'datetime'
	];

	protected $fillable = [
		'Descripcion',
		'Created_AT',
		'Update_AT'
	];

	public function elementos()
	{
		return $this->hasMany(Elemento::class, 'Id_Categoria');
	}
}
