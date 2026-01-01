<?php

declare(strict_types=1);

namespace Ghostwriter\GitHubCli\Exception;

use Ghostwriter\GitHubCli\Interface\GitHubCliExceptionInterface;
use RuntimeException;

final class GitHubCliException extends RuntimeException implements GitHubCliExceptionInterface {}
