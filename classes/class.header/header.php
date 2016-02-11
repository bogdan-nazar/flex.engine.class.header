<?
/*
 * Page Header
 * Шапка сайта
 *
 * Основные функции:
 *  - вывод верхнего html-блока страницы
 *
 * @author Bogdan Nazar <me@bogdan-nazar.ru>
 * @copyright 2012-2015 Bogdan-Nazar.Ru
 * @version 1.0.1
 *
 */

namespace FlexEngine;
defined("FLEX_APP") or die("Forbidden.");
final class header extends module
{
	protected static $configDefault	=	array(
	);

	protected static function _on1init()
	{
	}

	protected static function _on2exec()
	{
		self::resourceStyleAdd();
	}

	protected static function _on3render($section="")
	{
		$t=self::tplGet("main");
		$t->_render();
		//if(cache::get(self::$class,"main",self::$cacheTTL,true))return;
		//$t=tpl::get(self::$class,"main");
		//cache::set(self::$class,"main",self::$cacheTTL,$t->get(),true);
	}

	protected static function _on3sleep()
	{
	}
}
?>