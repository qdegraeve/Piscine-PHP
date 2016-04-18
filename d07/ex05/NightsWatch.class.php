<?php

class NightsWatch {

	private $_nights_watchers = array();

	public function recruit($new) {
			$this->_nights_watchers[] = $new;
	}

	public function fight() {
		foreach ($this->_nights_watchers as $watcher) {
			if (is_a($watcher, 'IFighter') == True)
				$watcher->fight();
		}
	}

}
?>
