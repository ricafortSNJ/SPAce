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
 * @property int $amount
 * @property Carbon $date
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
		'amount' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'booking_id',
		'amount',
		'date',
		'status'
	];
}
