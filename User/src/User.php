<?php

namespace Chmalo;

class User extends Model
{
	public function getFirstNameAttributes($value)
	{
		return strtoupper($value);
	}
}
 