<?php

declare(strict_types=1);

namespace Tests\Unit\Exception;

use Ghostwriter\GitHubCli\Container\GitHubCliDefinition;
use Ghostwriter\GitHubCli\Exception\GitHubCliException;
use Ghostwriter\GitHubCli\GitHubCli;
use Ghostwriter\GitHubCli\Interface\GitHubCliExceptionInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Unit\AbstractTestCase;
use Throwable;

use function is_a;

#[CoversClass(GitHubCliException::class)]
#[CoversClass(GitHubCliDefinition::class)]
#[CoversClass(GitHubCli::class)]
final class GitHubCliExceptionTest extends AbstractTestCase
{
    /** @throws Throwable */
    public function testImplementsExceptionInterface(): void
    {
        self::assertTrue(is_a(GitHubCliException::class, GitHubCliExceptionInterface::class, true));

        self::assertTrue(is_a(GitHubCliException::class, Throwable::class, true));
    }
}
