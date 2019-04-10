<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 09 Apr 2019 13:31:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Article
 * 
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $likes
 * @property \Carbon\Carbon $date
 * @property string $path
 *
 * @package App\Models
 */
class Article extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'likes' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'title',
		'content',
		'likes',
		'date',
		'path'
	];
}
