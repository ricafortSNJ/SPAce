<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $user_id
 * @property string $email_address
 * @property string $password
 * @property bool $is_customer
 * @property bool $is_professional
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $casts = [
		'is_customer' => 'bool',
		'is_professional' => 'bool'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'email_address',
		'password',
		'is_customer',
		'is_professional'
	];
}
