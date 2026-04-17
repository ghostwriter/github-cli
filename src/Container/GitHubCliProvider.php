<?php

declare(strict_types=1);

namespace Ghostwriter\GitHubCli\Container;

use Ghostwriter\Container\Interface\BuilderInterface;
use Ghostwriter\Container\Service\Provider\AbstractProvider;
use Ghostwriter\GitHubCli\GitHubCli;
use Ghostwriter\GitHubCli\Interface\GitHubCliInterface;
use Override;
use Throwable;

/**
 * @see GitHubCliProviderTest
 */
final class GitHubCliProvider extends AbstractProvider
{
    /** @throws Throwable */
    #[Override]
    public function register(BuilderInterface $builder): void
    {
        $builder->alias(GitHubCliInterface::class, GitHubCli::class);
    }
}
