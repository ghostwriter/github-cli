<?php

declare(strict_types=1);

namespace Tests\Unit;

use Ghostwriter\GitHubCli\Container\GitHubCliProvider;
use Ghostwriter\GitHubCli\GitHubCli;
use Ghostwriter\GitHubCli\Interface\GitHubCliInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use Throwable;

use function is_a;

#[CoversClass(GitHubCliProvider::class)]
#[CoversClass(GitHubCli::class)]
final class GitHubCliTest extends AbstractTestCase
{
    /** @throws Throwable */
    public function testGh(): void
    {
        self::assertStringContainsString('gh version', $this->gh->execute('--version')->stdout());
    }

    /** @throws Throwable */
    public function testGhAuthStatus(): void
    {
        self::assertStringContainsString('"state":"success"', $this->gh->authStatus('--json', 'hosts')->stdout());
    }

    /** @throws Throwable */
    public function testGhNewRepoView(): void
    {
        self::assertResultJson([
            'name' => 'github-cli',
        ], $this->gh->repoView('--json', 'name'));
    }

    /** @throws Throwable */
    public function testImplementsInterface(): void
    {
        self::assertTrue(is_a(GitHubCli::class, GitHubCliInterface::class, true));
    }
}
