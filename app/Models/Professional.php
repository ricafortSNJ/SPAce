<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Professional
 * 
 * @property int $professional_id
 * @property int $profile_id
 * @property string $expertise
 * @property string $availability
 * @property int $rates
 * @property string $location
 *
 * @package App\Models
 */
class Professional extends Model
{
	protected $table = 'professionals';
	protected $primaryKey = 'professional_id';
	public $timestamps = false;

	protected $casts = [
		'profile_id' => 'int',
		'rates' => 'int'
	];

	protected $fillable = [
		'profile_id',
		'expertise',
		'availability',
		'rates',
		'location'
	];
}
