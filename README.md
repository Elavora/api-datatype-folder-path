# api-datatype-folder-path

[![Packagist Version](https://img.shields.io/packagist/v/elavora/api-datatype-folder-path.svg?style=flat-square)](https://packagist.org/packages/elavora/api-datatype-folder-path)
[![PHP Version](https://img.shields.io/packagist/php-v/elavora/api-datatype-folder-path.svg?style=flat-square)](https://packagist.org/packages/elavora/api-datatype-folder-path)
[![Composer Quality](https://github.com/Elavora/api-datatype-folder-path/actions/workflows/quality.yml/badge.svg?branch=main)](https://github.com/Elavora/api-datatype-folder-path/actions/workflows/quality.yml)
[![CodeQL](https://github.com/Elavora/api-datatype-folder-path/actions/workflows/codeql.yml/badge.svg?branch=main)](https://github.com/Elavora/api-datatype-folder-path/actions/workflows/codeql.yml)
[![License](https://img.shields.io/packagist/l/elavora/api-datatype-folder-path.svg?style=flat-square)](https://packagist.org/packages/elavora/api-datatype-folder-path)

DataType imutavel para validar caminhos de pasta absolutos ou relativos.

## Requisitos

- PHP 8.3 ou superior.
- Demais requisitos declarados em [`composer.json`](composer.json).

## Instalacao

```bash
composer require elavora/api-datatype-folder-path
```

## Inicio rapido

```php
use Elavora\Api\DataTypes\Filesystem\FolderPath;

$valor = FolderPath::from('/var/uploads');
$normalizado = $valor->value();
```

Cada segmento precisa atender ao DataType `FolderName`.

## Documentacao

Consulte o [guia de uso](docs/USO.md) para as regras de composicao e a validacao local.
