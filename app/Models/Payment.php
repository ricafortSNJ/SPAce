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
 * @property Carbon $date
 * @property Carbon $time
 * @property string $owner
 * @property string $cvv
 * @property string $month_exp
 * @property string $year_exp
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
		'time' => 'date'
	];

	protected $fillable = [
		'booking_id',
		'user_id',
		'amount',
		'date',
		'time',
		'owner',
		'cvv',
		'month_exp',
		'year_exp'
	];
}
