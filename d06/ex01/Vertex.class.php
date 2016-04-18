<?php
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Vertex.class.php                                   :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: qdegraev <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2016/04/13 09:52:11 by qdegraev          #+#    #+#              #
#    Updated: 2016/04/13 19:46:53 by qdegraev         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

class Vertex {

	private $_x = 0;
	private $_y = 0;
	private $_z = 0;
	private $_w = 0;
	private $color = 0;

	public static $verbose = False;

	public static function doc() {
		if (file_exists('./Vertex.doc.txt'))
			echo file_get_contents('./Vertex.doc.txt');
	}

	public function __construct( array $kwargs ) {

			$this->_x = $kwargs['x'];
			$this->_y = $kwargs['y'];
			$this->_z = $kwargs['z'];

		if ( array_key_exists ( 'w', $kwargs ))
			$this->_w = $kwargs['w'];
		else
			$this->_w = 1.0;

		if ( array_key_exists ( 'color', $kwargs ))
			$this->_color = $kwargs['color'];
		else
			$this->_color = new Color ( array ('rgb' => 0xFFFFFF));

		if (self::$verbose == True)
			printf('Vertex( x: % 3.2f, y: % 3.2f, z:%3.2f, w:%3.2f, %s ) constructed' . PHP_EOL, $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
	}

	public function setX($x) {
		$this->_x = $x;
	}
	public function setY($y) {
		$this->_y = $y;
	}
	public function setZ($z) {
		$this->_z = $z;
	}
	public function setW($w) {
		$this->_w = $w;
	}
	public function setColor($color) {
		$this->_color = $color;
	}

	public function getX($x) {
		return ($this->_x);
	}
	public function getY($y) {
		return ($this->_y);
	}
	public function getZ($z) {
		return ($this->_z);
	}
	public function getW($w) {
		return ($this->_w);
	}
	public function getColor($color) {
		return ($this->_color);
	}

	public function __toString() {
		$ret = sprintf('Vertex( x: % 3.2f, y: % 3.2f, z:% 3.2f, w:% 3.2f', $this->_x, $this->_y, $this->_z, $this->_w);
		$ret .= self::$verbose == true ? ', ' . $this->_color . ' )' : " )";
		return ($ret);
	}

	public function __destruct() {
		if (self::$verbose == True)
			printf('Vertex( x: % 3.2f, y: % 3.2f, z:%3.2f, w:%3.2f, %s ) destructed' . PHP_EOL, $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
	}

}
