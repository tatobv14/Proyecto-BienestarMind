<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioFicha
 * 
 * @property int $Id_usuario_ficha
 * @property int $Id_Usuario
 * @property string $Id_ficha
 * @property Carbon $created_AT
 * @property Carbon $update_AT
 * 
 * @property Usuario $usuario
 * @property Ficha $ficha
 *
 * @package App\Models
 */
class UsuarioFicha extends Model
{
	protected $table = 'usuario_ficha';
	protected $primaryKey = 'Id_usuario_ficha';
	public $timestamps = false;

	protected $casts = [
		'Id_Usuario' => 'int',
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Id_Usuario',
		'Id_ficha',
		'created_AT',
		'update_AT'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Id_Usuario');
	}

	public function ficha()
	{
		return $this->belongsTo(Ficha::class, 'Id_ficha');
	}
}
