<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 * 
 * @property int $review_id
 * @property int $booking_id
 * @property int $reviewer_id
 * @property int $reviewee_id
 * @property int $rating
 * @property string|null $review
 * @property Carbon $last_update
 *
 * @package App\Models
 */
class Review extends Model
{
	protected $table = 'reviews';
	protected $primaryKey = 'review_id';
	public $timestamps = false;

	protected $casts = [
		'booking_id' => 'int',
		'reviewer_id' => 'int',
		'reviewee_id' => 'int',
		'rating' => 'int'
	];

	protected $dates = [
		'last_update'
	];

	protected $fillable = [
		'booking_id',
		'reviewer_id',
		'reviewee_id',
		'rating',
		'review',
		'last_update'
	];
}
