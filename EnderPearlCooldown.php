<?php
declare(strict_types = 1);
/**
 * @name EnderPearlCooldownAddon
 * @version 1.0.0
 * @main JackMD\ScoreHud\Addons\EnderPearlCooldownAddon
 * @depend EnderPearlCooldown
 */
namespace JackMD\ScoreHud\Addons
{
	use JackMD\ScoreHud\addon\AddonBase;
	use AdminConfirmed\EnderPearlCooldown\Main;
	use pocketmine\Player;
	class EnderPearlCooldownAddon extends AddonBase{
		/** @var EnderPearlCooldown */
		private $EnderPearlCooldown;
		public function onEnable(): void{
			$this->EnderPearlCooldown = $this->getServer()->getPluginManager()->getPlugin("EnderPearlCooldown");
		}
		/**
		 * @param Player $player
		 * @return array
		 */
		public function getProcessedTags(Player $player): array{
			return [
				"{pearl_duration}" => $this->EnderPearlCooldown->onEnderPearl(PlayerInteractEvent, $event)
			];
		}
	}
}
