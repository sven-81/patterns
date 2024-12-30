<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

use patterns\creational\abstractFactory\newspaper\NewspaperPageTemplate;
use patterns\creational\abstractFactory\newspaper\NewspaperPicture;
use patterns\creational\abstractFactory\newspaper\NewspaperRenderer;
use patterns\creational\abstractFactory\newspaper\NewspaperTemplateFactory;
use patterns\creational\abstractFactory\newspaper\NewspaperTitleTemplate;
use patterns\creational\abstractFactory\online\OnlinePageTemplate;
use patterns\creational\abstractFactory\online\OnlinePicture;
use patterns\creational\abstractFactory\online\OnlineRenderer;
use patterns\creational\abstractFactory\online\OnlineTemplateFactory;
use patterns\creational\abstractFactory\online\OnlineTitleTemplate;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Page::class)]
#[CoversClass(NewspaperPageTemplate::class)]
#[CoversClass(NewspaperPicture::class)]
#[CoversClass(NewspaperRenderer::class)]
#[CoversClass(NewspaperTemplateFactory::class)]
#[CoversClass(NewspaperTitleTemplate::class)]
#[CoversClass(OnlinePageTemplate::class)]
#[CoversClass(OnlinePicture::class)]
#[CoversClass(OnlineRenderer::class)]
#[CoversClass(OnlineTemplateFactory::class)]
#[CoversClass(OnlineTitleTemplate::class)]
class PageTest extends TestCase
{
    public function testCanRenderOnlinePage(): void
    {
        $factory = new OnlineTemplateFactory();
        $title = 'some online article';
        $content = 'a lot of text about something';
        $picture = new OnlinePicture();
        $page = new Page($title, $content, $picture);

        $onlinePage = $page->render($factory);

        $expectedString = <<<OUT
Online Page:
<div class="page">
    <h1>some online article</h1>
    <article class="content">a lot of text about something</article>
    <image class="image">picture with 96 dpi</image>
</div>
OUT;
        $this->assertSame($expectedString, $onlinePage);
    }


    public function testCanRenderNewspaperPage(): void
    {
        $factory = new NewspaperTemplateFactory();
        $title = 'some article on paper';
        $content = 'lots of text about something else from yesterday';
        $picture = new NewspaperPicture();
        $page = new Page($title, $content, $picture);

        $onlinePage = $page->render($factory);

        $expectedString = <<<OUT
Newspaper Page in your hands:
    <b>some article on paper!</b>
    <article class="content">lots of text about something else from yesterday</article>
    <image class="image">picture with 300 dpi for print</image>
    <article class="content">a lot more stuff</article>
OUT;
        $this->assertSame($expectedString, $onlinePage);
    }


    public function testCanRenderOnlinePageWithNewspaperPictureAndConvertItForOnline(): void
    {
        $factory = new OnlineTemplateFactory();
        $title = 'some online article';
        $content = 'a lot of text about something';
        $picture = new NewspaperPicture();
        $page = new Page($title, $content, $picture);

        $onlinePage = $page->render($factory);

        $expectedString = <<<OUT
Online Page:
<div class="page">
    <h1>some online article</h1>
    <article class="content">a lot of text about something</article>
    <image class="image">picture with 96 dpi</image>
</div>
OUT;
        $this->assertSame($expectedString, $onlinePage);
    }
}
