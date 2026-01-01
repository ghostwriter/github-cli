<?php

declare(strict_types=1);

namespace Tests\Unit;

use Ghostwriter\GitHubCli\GitHubCli;
use Ghostwriter\GitHubCli\Interface\GitHubCliInterface;
use Ghostwriter\Shell\Interface\ResultInterface;
use PHPUnit\Framework\TestCase;
use Throwable;

use const JSON_THROW_ON_ERROR;

use function json_encode;
use function mb_trim;

abstract class AbstractTestCase extends TestCase
{
    protected GitHubCliInterface $gh;

    protected function setUp(): void
    {
        $this->gh = GitHubCli::new();

        parent::setUp();
    }

    /** @throws Throwable */
    public static function assertResultJson(array $expected, ResultInterface $result): void
    {
        $stdout = $result->stdout();

        self::assertJson($stdout);

        self::assertSame(json_encode($expected, JSON_THROW_ON_ERROR), mb_trim($stdout));
    }
}
