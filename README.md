PHP-Simple-HTML-DOM-Parser
==========================

PHP Simple HTML DOM Parser - bundle for laravel

Parsing data from html or xml websites or strings

You can use jQuery selector syntax, more in documentation.


example: 

    $HDM = IoC::resolve('HtmlDomParser');
    // Get from file
    $dom = $HDM::file_get_html( 'http://www.google.com/finance/converter' );
    // Get from string
    $dom = $HDM::str_get_html( '<html><a href="http://laravel.com/"></html>' );
    
    $href = $dom->find('a',0)->href; // = "http://laravel.com/"


php simple html dom [Documentation](http://simplehtmldom.sourceforge.net/manual.htm "doc")

