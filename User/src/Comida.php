<?php

namespace Chmalo; 

class Comida extends Model
{
	public function getBebidaAttribute()
	{
		return $this->attributes['bebida'] ?? false;
	}
}
