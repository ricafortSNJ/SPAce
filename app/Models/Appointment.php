<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Appointment
 * 
 * @property int $appointment_id
 * @property string $name
 * @property string $email_address
 * @property string $request_date
 * @property string $request_time
 * @property string $service
 * @property Carbon $date
 * @property Carbon $time
 *
 * @package App\Models
 */
class Appointment extends Model
{
	protected $table = 'appointments';
	protected $primaryKey = 'appointment_id';
	public $timestamps = false;

	protected $casts = [
		'date' => 'date',
		'time' => 'date'
	];

	protected $fillable = [
		'name',
		'email_address',
		'request_date',
		'request_time',
		'service',
		'date',
		'time'
	];
}
