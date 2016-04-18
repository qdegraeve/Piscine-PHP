<?php

abstract class Fighter {

	private $_name;

	public function __construct( $category ) {
		$this->_name = $category;
	}

	public function getName() {
		return $this->_name;
	}

	abstract public function fight($target);
}

?>
