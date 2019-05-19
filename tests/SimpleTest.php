<?php

use PHPUnit\Framework\TestCase;
use tdebatty\PhpSimple\HtmlDomParser;

final class SimpleTest extends TestCase
{
    public function testTrue() : void
    {
        $this->assertTrue(true);
    }

    public function testLoadString() : void
    {
        $dom = HtmlDomParser::str_get_html( "<html>" );
    }

}
