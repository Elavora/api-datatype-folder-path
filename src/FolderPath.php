<?php

declare(strict_types=1);

namespace Elavora\Api\DataTypes\Filesystem;

use Elavora\Api\DataTypes\AbstractDataType;
use Elavora\Api\Framework\Contracts\DescribesType;

final readonly class FolderPath extends AbstractDataType implements DescribesType
{
    /**
     * Descreve o tipo para a documentacao publica (OPTIONS).
     *
     * @return array<string, mixed>
     */
    public static function documentedType(): array
    {
        return [
            'type' => 'string',
            'description' => 'Caminho de pasta separado por "/", com barra inicial opcional. '
                . 'Cada pasta tem de 1 a 255 caracteres, sem ponto e sem \ / : * ? " < > |; '
                . 'nao aceita pastas vazias (ex.: "//").',
            'example' => '/var/uploads',
        ];
    }

    /**
     * Verifica se o valor e um caminho de pasta valido.
     */
    public static function isValid(mixed $value): bool
    {
        if (!is_string($value) || $value === '') {
            return false;
        }

        foreach (explode('/', $value) as $index => $folder) {
            if ($index === 0 && $folder === '') {
                continue;
            }

            if (!FolderName::isValid($folder)) {
                return false;
            }
        }

        return true;
    }
}
