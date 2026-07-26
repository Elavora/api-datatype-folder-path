# Guia de uso

`FolderPath` aceita caminhos absolutos ou relativos separados por `/`. Cada segmento deve ser um `FolderName` valido.

```php
use Elavora\Api\DataTypes\Filesystem\FolderPath;

$folderPath = FolderPath::from('/var/uploads');

echo $folderPath->value(); // /var/uploads
```

Segmentos vazios, pontos e nomes nao portaveis sao rejeitados. Uma barra inicial e aceita para representar caminho absoluto; barra final nao e aceita.

## Validacao do pacote

Execute os comandos a partir da raiz do clone:

```bash
docker run --rm -v "${PWD}:/workspace" -w /workspace composer:2 composer update --no-interaction --no-progress --prefer-dist
docker run --rm -v "${PWD}:/workspace" -w /workspace composer:2 composer check
```
