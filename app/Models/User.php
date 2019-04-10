<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 09 Apr 2019 13:31:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $role
 *
 * @package App\Models
 */
class User extends Eloquent
{
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'login',
		'password',
		'role'
	];
}
