<?php

declare(strict_types = 1);

namespace jasonwynn10\VanillaEntityAI\item;


use pocketmine\item\Item;

class Lead extends Item {
	public function __construct(int $meta = 0){
		parent::__construct(self::LEAD, $meta, "Lead");
	}
}
