<?php

declare(strict_types=1);

namespace Elavora\Api\DataTypes\FolderPath\Tests;

use Elavora\Api\DataTypes\Filesystem\FolderPath;
use PHPUnit\Framework\TestCase;

final class FolderPathTest extends TestCase
{
    public function testValidatesFolderPath(): void
    {
        self::assertTrue(FolderPath::isValid('/var/uploads'));
        self::assertFalse(FolderPath::isValid('/var//uploads'));
    }
}
