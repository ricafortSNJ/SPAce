<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Newsletter
 * 
 * @property int $email_id
 * @property string $email_address
 *
 * @package App\Models
 */
class Newsletter extends Model
{
	protected $table = 'newsletters';
	protected $primaryKey = 'email_id';
	public $timestamps = false;

	protected $fillable = [
		'email_address'
	];
}
