<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property int $payment_id
 * @property int $booking_id
 * @property int $user_id
 * @property int $amount
 * @property Carbon|null $date
 * @property Carbon|null $time
 * @property bool $status
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payments';
	protected $primaryKey = 'payment_id';
	public $timestamps = false;

	protected $casts = [
		'booking_id' => 'int',
		'user_id' => 'int',
		'amount' => 'int',
		'date' => 'date',
		'time' => 'date',
		'status' => 'bool'
	];

	protected $fillable = [
		'booking_id',
		'user_id',
		'amount',
		'date',
		'time',
		'status'
	];
}
