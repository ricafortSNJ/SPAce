<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inquiry
 * 
 * @property int $query_id
 * @property string $name
 * @property string $email_address
 * @property string $subject
 * @property string $message
 * @property Carbon $date
 * @property Carbon $time
 *
 * @package App\Models
 */
class Inquiry extends Model
{
	protected $table = 'inquiries';
	protected $primaryKey = 'query_id';
	public $timestamps = false;

	protected $casts = [
		'date' => 'date',
		'time' => 'date'
	];

	protected $fillable = [
		'name',
		'email_address',
		'subject',
		'message',
		'date',
		'time'
	];
}
