<?php

namespace herojhjh; //sesuai lokasi foldernya tidak termasuk src

/*
 * Yang akan di pakai
 */
use pocketmine\inventory\ShapedRecipe;
use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;

class Loader extends PluginBase
{
	public function OnEnable(){
		$item = Item::get(276, 0, 1);
		$ce = $this->getServer()->getPluginManager()->getPlugin("PiggyCustomEnchants");
		$ce->addEnchantment($item, ["Deathbringer", "Gooey"], [4, 2]);
		$recipe = new ShapedRecipe($item, 3, 3);
		$recipe->addIngredient(0, 0, Item::get(399, 0, 1));
		$recipe->addIngredient(1, 0, Item::get(264, 0, 1));
		$recipe->addIngredient(2, 0, Item::get(399, 0, 1));
		$recipe->addIngredient(0, 1, Item::get(399, 0, 1));
		$recipe->addIngredient(1, 1, Item::get(264, 0, 1));
		$recipe->addIngredient(2, 1, Item::get(399, 0, 1));
		$recipe->addIngredient(0, 2, Item::get(399, 0, 1));
		$recipe->addIngredient(1, 2, Item::get(280, 0, 1));
		$recipe->addIngredient(2, 2, Item::get(399, 0, 1));
		$this->getServer()->getCraftingManager()->registerRecipe($recipe);
	}
}