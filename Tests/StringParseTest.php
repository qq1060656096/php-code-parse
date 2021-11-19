<?php
namespace Zwei\PhpCodeParse\Tests;



use Zwei\PhpCodeParse\StringParse;

class StringParseTest extends TestCaseBase
{
    public function testParseString() {
        $vars = [
            'global' => [
                'host' => 'www.xxx.com',
                'contentType' => 'application/json',
                'noChange' => 'oldValue'
            ],
        ];
        $string = '${global["host"]}/index.php';
        $parse = new StringParse();
        $parse->setVars($vars);
        $newString = $parse->execute($string);
        $this->assertEquals("www.xxx.com/index.php", $newString);
    }
}