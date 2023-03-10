<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserImage
 * 
 * @property int $image_id
 * @property int $user_id
 * @property string $image
 *
 * @package App\Models
 */
class UserImage extends Model
{
	protected $table = 'user_images';
	protected $primaryKey = 'image_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'image'
	];
}
