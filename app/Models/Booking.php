<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Booking
 * 
 * @property int $booking_id
 * @property int $user_id
 * @property int $professional_id
 * @property Carbon $date
 * @property Carbon $time
 * @property string $status
 *
 * @package App\Models
 */
class Booking extends Model
{
	protected $table = 'bookings';
	protected $primaryKey = 'booking_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'professional_id' => 'int'
	];

	protected $dates = [
		'date',
		'time'
	];

	protected $fillable = [
		'user_id',
		'professional_id',
		'date',
		'time',
		'status'
	];
}
