<?php

declare(strict_types=1);

namespace Elavora\Api\DataTypes\FolderPath\Tests;

use Elavora\Api\DataTypes\Filesystem\FolderPath;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class FolderPathPortabilityTest extends TestCase
{
    public function testAcceptsPortablePathWithoutChangingIt(): void
    {
        $path = '/Meus arquivos/Relatorios 東京';

        self::assertSame($path, FolderPath::from($path)->value());
    }

    #[DataProvider('invalidPaths')]
    public function testRejectsUnsafeFolderSegments(mixed $value): void
    {
        self::assertFalse(FolderPath::isValid($value));
    }

    /**
     * @return iterable<string, array{mixed}>
     */
    public static function invalidPaths(): iterable
    {
        yield 'reserved folder' => ['/arquivos/CON'];
        yield 'folder with trailing space' => ['/arquivos /temporarios'];
        yield 'control in folder' => ["/arqui\nvos/temporarios"];
        yield 'dot segment' => ['/arquivos/../temporarios'];
        yield 'empty segment' => ['/arquivos//temporarios'];
        yield 'trailing slash' => ['/arquivos/'];
        yield 'non string' => [123];
    }
}
