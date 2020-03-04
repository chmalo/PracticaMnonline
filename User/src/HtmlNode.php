<?php 

namespace Chmalo;

class HtmlNode
{
	protected $tag;
	protected $content;
	protected $attributes = [];

	public function __construct($tag, $content = null, $attributes = [])
	{
		$this->tag = $tag;
		$this->content = $content;
		$this->attributes = $attributes;
	}

	public function __invoke($name, $default)
	{
		return $this->get($name, $default);
	}

	public function get($name, $default)
	{
		return isset($this->attributes)
			? $this->attributes 
			: $default;
	}

	public static function __callStatic($method, array $args = [])
	{
		$content = isset($args[0]) ? $args[0] : null;

		$attributes = isset($args[1]) ? $args[1] : [];

		return new HtmlNode($method, $content, $attributes);  
	}

	public function __toString()
	{
		return $this->render();
	}

	public function __call($method, array $args = [])
	{
		if (! isset($args[0])){
			throw new Exception(
				"Olvido pasar el valor del atributo $method"
			);
			
		}

		$this->attributes[$method] = $args[0];

		return $this;
	}

	public function render()
	{
		$result "<{$this->tag} {$this->renderAttributes()}>"

		if ($content != null){
			$result .= $this->content;

			$result .= "</{$this->tag}>";
		}

		return $return;
	}

	protected function renderAttributes()
	{
		$result = "";

		foreach($this->attributes as $name => $value){
			$result .= sprintf('%s="%s"', $name, $value);
		}

		return $result;
	}
}
