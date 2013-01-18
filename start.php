<?php
/**
 * @author Han Lin Yap < http://zencodez.net/ >
 * @copyright 2012 zencodez.net
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package Facebook SDK (Laravel Bundle)
 * @version 1.0 - 2012-02-25
 */


Autoloader::map(array(
	'HtmlDomParser' => Bundle::path('phpsimplehtmldom').'php-simple-html-dom-parser/Src/Sunra/PhpSimple/HtmlDomParser.php',
));

Laravel\IoC::singleton('HtmlDomParser', function()
{
	return new HtmlDomParser();
});
