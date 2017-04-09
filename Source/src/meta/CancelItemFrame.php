<?php

namespace meta;

use pocketmine\event\block\ItemFrameDropItemEvent;
use pocketmine\plugin\pluginBase;
use pocketmine\event\Listener;

class CancelItemFrame extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents( $this, $this);
	}
	public function onBreakItem(ItemFrameDropItemEvent $ev) {
		if (!$ev->getPlayer()->isOp()) {
			$ev->setCancelled();
		}
	}
}
