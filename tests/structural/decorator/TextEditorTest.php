<?php

declare(strict_types=1);

namespace patterns\structural\decorator;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(EditorDecorator::class)]
#[CoversClass(JsonFormatterDecorator::class)]
#[CoversClass(LowerCaseConverterDecorator::class)]
#[CoversClass(PhpSyntaxAddOn::class)]
class TextEditorTest extends TestCase
{
    public function testCanRunTextEditorWithLowerCaseConverter(): void
    {
        $phpSyntaxAddOn = new PhpSyntaxAddOn();
        $editorDecorator = new EditorDecorator($phpSyntaxAddOn);

        $lowerCaseConverterDecorator = new LowerCaseConverterDecorator($editorDecorator);
        $out = $lowerCaseConverterDecorator->run('Hier kommt ein KLEINER Text.');

        $this->assertEquals('<?php hier kommt ein kleiner text. ?>', $out);

        $lowerCaseConverterDecorator->about();
        $this->expectOutputString('I write everything in lower case' . PHP_EOL);
    }


    public function testCanRunTextEditorWithAllAddOns(): void
    {
        $phpSyntaxAddOn = new PhpSyntaxAddOn();
        $editorDecorator = new EditorDecorator($phpSyntaxAddOn);
        $jsonFormatter = new JsonFormatterDecorator($editorDecorator);

        $lowerCaseConverterDecorator = new LowerCaseConverterDecorator($jsonFormatter);
        $out = $lowerCaseConverterDecorator->run('Hier kommt ein KLEINER Text.');

        $this->assertEquals('"<?php hier kommt ein kleiner text. ?>"', $out);

        $phpSyntaxAddOn->about();
        $jsonFormatter->about();
        $lowerCaseConverterDecorator->about();
        $this->expectOutputString(
            'I have got the syntax for php' . PHP_EOL .
            'I write jsons' . PHP_EOL .
            'I write everything in lower case' . PHP_EOL
        );
    }
}
