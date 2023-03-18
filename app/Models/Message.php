<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * 
 * @property int $message_id
 * @property int $sender_id
 * @property int $receiver_id
 * @property string $content
 * @property Carbon $date
 * @property Carbon $time
 *
 * @package App\Models
 */
class Message extends Model
{
	protected $table = 'messages';
	protected $primaryKey = 'message_id';
	public $timestamps = false;

	protected $casts = [
		'sender_id' => 'int',
		'receiver_id' => 'int',
		'date' => 'date',
		'time' => 'date'
	];

	protected $fillable = [
		'sender_id',
		'receiver_id',
		'content',
		'date',
		'time'
	];
}
