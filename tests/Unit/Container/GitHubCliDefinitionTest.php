<?php

declare(strict_types=1);

namespace Tests\Unit\Container;

use Ghostwriter\Container\Interface\Service\DefinitionInterface;
use Ghostwriter\GitHubCli\Container\GitHubCliDefinition;
use Ghostwriter\GitHubCli\GitHubCli;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Unit\AbstractTestCase;

use function is_a;

#[CoversClass(GitHubCliDefinition::class)]
#[CoversClass(GitHubCli::class)]
final class GitHubCliDefinitionTest extends AbstractTestCase
{
    public function testImplementsDefinitionInterface(): void
    {
        self::assertTrue(is_a(GitHubCliDefinition::class, DefinitionInterface::class, true));
    }
}
