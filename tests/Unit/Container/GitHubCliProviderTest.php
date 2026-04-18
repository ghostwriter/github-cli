<?php

declare(strict_types=1);

namespace Tests\Unit\Container;

use Ghostwriter\Container\Interface\BuilderInterface;
use Ghostwriter\Container\Interface\Service\ProviderInterface;
use Ghostwriter\Container\Service\Provider\AbstractProvider;
use Ghostwriter\GitHubCli\Container\GitHubCliProvider;
use Ghostwriter\GitHubCli\GitHubCli;
use Ghostwriter\GitHubCli\Interface\GitHubCliInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use Tests\Unit\AbstractTestCase;

use function is_a;

#[CoversClass(GitHubCliProvider::class)]
#[UsesClass(GitHubCli::class)]
final class GitHubCliProviderTest extends AbstractTestCase
{
    public function testExtendsAbstractProvider(): void
    {
        self::assertTrue(is_a(GitHubCliProvider::class, AbstractProvider::class, true));
    }

    public function testImplementsProviderInterface(): void
    {
        self::assertTrue(is_a(GitHubCliProvider::class, ProviderInterface::class, true));
    }

    public function testProviderRegister(): void
    {
        $builder = $this->createMock(BuilderInterface::class);

        $builder->expects(self::once())
            ->method('alias')
            ->with(GitHubCliInterface::class, GitHubCli::class)
            ->seal();

        (new GitHubCliProvider())->register($builder);
    }
}
