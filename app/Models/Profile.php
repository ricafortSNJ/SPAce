<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profile
 * 
 * @property int $profile_id
 * @property int $user_id
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile_number
 * @property int $image_id
 * @property string|null $social_media
 * @property string $privacy_setting
 *
 * @package App\Models
 */
class Profile extends Model
{
	protected $table = 'profiles';
	protected $primaryKey = 'profile_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'image_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'username',
		'first_name',
		'last_name',
		'mobile_number',
		'image_id',
		'social_media',
		'privacy_setting'
	];
}
