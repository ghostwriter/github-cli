<?php

declare(strict_types=1);

use Ghostwriter\GitHubCli\Interface\GitHubCliInterface;

require \implode(\DIRECTORY_SEPARATOR, [\dirname(__DIR__), 'vendor', 'autoload.php']);

$workspace = __DIR__;
$lines = [
    '# GitHub Cli Documentation',
    '',
    '```php',
    'use Ghostwriter\GitHubCli\GitHubCli;',
    '',
    '$gh = GitHubCli::new();',
];

$class = GitHubCliInterface::class;
$reflectionClass = new \ReflectionClass($class);
$methods = $reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC);

foreach ($methods as $method) {
    if ($method->isConstructor() || $method->isDestructor() || $method->isStatic()) {
        continue;
    }

    $docComment = $method->getDocComment();
    if (false === $docComment) {
        throw new \RuntimeException('No doc comment found for method: ' . $method->getName());
    }

    // Clean up the doc comment for better readability
    $cleanedDocComment = \preg_replace('/^\s*\/\*\*|\s*\*\/\s*$/', '', $docComment);
    $cleanedDocComment = \preg_replace('/^\s*\*\s?/m', '', $cleanedDocComment);

    $methodName = $method->getName();
    $lines[] = '';
    $lines[] = '// ' . \mb_trim($cleanedDocComment);
    $lines[] = '$gh->' . $methodName . '(\'--help\');';
}
$lines[] = '```';

$documentation = \implode(\PHP_EOL, $lines);

\file_put_contents($workspace . \DIRECTORY_SEPARATOR . 'README.md', $documentation);
echo 'Documentation generated successfully.' . \PHP_EOL;
