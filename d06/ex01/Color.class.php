<?php

class Color {

	public	$red = 0;
	public	$green = 0;
	public	$blue = 0;

	public static $verbose;

	public function __construct( array $kwargs ) {

		if (array_key_exists('rgb', $kwargs)) {
			$this->red = intval(($kwargs['rgb'] >> 16) % 256);
			$this->green = intval(($kwargs['rgb'] >> 8) % 256);
			$this->blue = intval( $kwargs['rgb'] % 256);
		}

		else {
			if (array_key_exists('red', $kwargs))
				$this->red = intval($kwargs['red']);

			if (array_key_exists('green', $kwargs))
				$this->green = intval($kwargs['green']);

			if (array_key_exists('blue', $kwargs))
				$this->blue = intval($kwargs['blue']);
		}

		if (self::$verbose == TRUE)
			printf("Color( red: % 3d, green: % 3d, blue: % 3d ) constructed.\n", $this->red, $this->green, $this->blue);

		return ;
	}

	public static function doc() {
		if (file_exists('./Color.doc.txt'))
			echo file_get_contents('./Color.doc.txt') . PHP_EOL;
	}

	public function __toString() {
		return (sprintf("Color( red: % 3d, green: % 3d, blue: % 3d )", $this->red, $this->green, $this->blue));
	}

	public function add($instance) {
		return ( new Color( array(
			'red' => $this->red + $instance->red,
			'green' => $this->green + $instance->green,
			'blue' => $this->blue + $instance->blue)));
	}

	public function sub($instance) {
		return ( new Color( array(
			'red' => $this->red - $instance->red,
			'green' => $this->green - $instance->green,
			'blue' => $this->blue - $instance->blue)));
	}

	public function mult($instance) {
		return ( new Color( array(
			'red' => $this->red * $instance->red,
			'green' => $this->green * $instance->green,
			'blue' => $this->blue * $instance->blue)));
	}

	public function __destruct() {
		if (self::$verbose == TRUE)
			printf("Color( red: % 3d, green: % 3d, blue: % 3d ) destructed.\n", $this->red, $this->green, $this->blue);
	}
}

?>
