<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Asesorium
 * 
 * @property int $Id_Asesoria
 * @property string|null $Motivo_asesoria
 * @property Carbon|null $Fecha
 * @property int|null $Id_Usuario_Recibe
 * @property int|null $Id_Usuario_Asesor
 * @property string|null $ficha_Id_ficha
 * @property Carbon|null $created_AT
 * @property Carbon|null $update_AT
 * 
 * @property Usuario|null $usuario
 * @property Ficha|null $ficha
 *
 * @package App\Models
 */
class Asesorium extends Model
{
	protected $table = 'asesoria';
	protected $primaryKey = 'Id_Asesoria';
	public $timestamps = false;

	protected $casts = [
		'Fecha' => 'datetime',
		'Id_Usuario_Recibe' => 'int',
		'Id_Usuario_Asesor' => 'int',
		'created_AT' => 'datetime',
		'update_AT' => 'datetime'
	];

	protected $fillable = [
		'Motivo_asesoria',
		'Fecha',
		'Id_Usuario_Recibe',
		'Id_Usuario_Asesor',
		'ficha_Id_ficha',
		'created_AT',
		'update_AT'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Id_Usuario_Asesor');
	}

	public function ficha()
	{
		return $this->belongsTo(Ficha::class, 'ficha_Id_ficha');
	}
}
