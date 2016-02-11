<?
namespace FlexEngine;
defined("FLEX_APP") or die("Forbidden.");
class header extends module
{
	protected static $configDefault	=	array(
	);

	protected static function _on_install()
	{
	}

	protected static function _on_uninstall()
	{
	}

	protected static function _on1init()
	{
	}

	protected static function _on2exec()
	{
	}

	protected static function _on3render($section="")
	{
		echo"Управление хэдером";
	}

	protected static function _on4sleep()
	{
	}
}
?>