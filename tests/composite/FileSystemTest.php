<?php

declare(strict_types=1);

namespace patterns\composite;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(File::class)]
#[CoversClass(Folder::class)]
class FileSystemTest extends TestCase
{
    public function testCanManageFilesAndFolders(): void
    {
        $file1 = new File('file1.txt');
        $file2 = new File('file2.xml');
        $file3 = new File('file3.json');

        $folder1 = new Folder('private');
        $folder1->add($file1);
        $folder1->add($file2);

        $folder2 = new Folder('public');
        $folder2->add($file3);
        $folder2->add($folder1);

        $folder2->display(2);

        $this->expectOutputString(
            <<<'OUT'
--folder: public
----file3.json
----folder: private
------file1.txt
------file2.xml

OUT
        );
    }
}
