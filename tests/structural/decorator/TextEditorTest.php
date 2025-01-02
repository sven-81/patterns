<?php

declare(strict_types=1);

namespace patterns\structural\decorator;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(EditorDecorator::class)]
#[CoversClass(JsonFormatter::class)]
#[CoversClass(LowerCaseConverterAddOn::class)]
#[CoversClass(LowerCaseConverterDecorator::class)]
#[CoversClass(PhpSyntax::class)]
class TextEditorTest extends TestCase
{
    public function testCanRunTextEditorWithLowerCaseConverter(): void
    {
        $addOn = new LowerCaseConverterAddOn();
        $editorDecorator = new EditorDecorator($addOn);

        $lowerCaseConverterDecorator = new LowerCaseConverterDecorator($editorDecorator);
        $out = $lowerCaseConverterDecorator->run('Hier kommt ein KLEINER Text.');

        $this->assertEquals('hier kommt ein kleiner text.', $out);

        $lowerCaseConverterDecorator->about();
        $this->expectOutputString('I write everything in lower case' . PHP_EOL);
    }

    public function testCanRunTextEditorWithAllAddOns(): void
    {
        $addOn = new LowerCaseConverterAddOn();
        $editorDecorator = new EditorDecorator($addOn);
        #   $jsonFormatter = new JsonFormatter();
        #   $phpSyntax = new PhpSyntax();

        $lowerCaseConverterDecorator = new LowerCaseConverterDecorator($editorDecorator);
        $out = $lowerCaseConverterDecorator->run('Hier kommt ein KLEINER Text.');

        $this->assertEquals('hier kommt ein kleiner text.', $out);

        $lowerCaseConverterDecorator->about();
        $this->expectOutputString('I write everything in lower case' . PHP_EOL);
    }
}
