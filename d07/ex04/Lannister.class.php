<?php

class Lannister {

	public function sleepWith( $who ) {
		if (get_parent_class($who) != get_parent_class($this))
			print ("Let's do this." . PHP_EOL);
		elseif (get_class($this) == 'Jaime' && get_class($who) == 'Cersei')
			print ("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		else
			print ("Not even if I'm drunk !" . PHP_EOL);
	}
}
?>
