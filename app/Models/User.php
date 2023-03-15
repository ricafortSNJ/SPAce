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
 * @property string $user_type
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'email_address',
		'password',
		'user_type'
	];
}
