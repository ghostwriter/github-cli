<?php

declare(strict_types=1);

namespace Ghostwriter\GitHubCli\Container;

use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\Service\DefinitionInterface;
use Ghostwriter\GitHubCli\GitHubCli;
use Ghostwriter\GitHubCli\Interface\GitHubCliInterface;
use Override;
use Throwable;

/**
 * @see GitHubCliDefinitionTest
 */
final readonly class GitHubCliDefinition implements DefinitionInterface
{
    /** @throws Throwable */
    #[Override]
    public function __invoke(ContainerInterface $container): void
    {
        $container->alias(GitHubCli::class, GitHubCliInterface::class);
    }
}
