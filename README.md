# GitHub CLI

[![GitHub Sponsors](https://img.shields.io/github/sponsors/ghostwriter?label=Sponsor+@ghostwriter/github-cli&logo=GitHub+Sponsors)](https://github.com/sponsors/ghostwriter)
[![Automation](https://github.com/ghostwriter/github-cli/actions/workflows/automation.yml/badge.svg)](https://github.com/ghostwriter/github-cli/actions/workflows/automation.yml)
[![Supported PHP Version](https://badgen.net/packagist/php/ghostwriter/github-cli?color=8892bf)](https://www.php.net/supported-versions)
[![Downloads](https://badgen.net/packagist/dt/ghostwriter/github-cli?color=blue)](https://packagist.org/packages/ghostwriter/github-cli)

PHP wrapper for GitHub CLI (`gh`).

## Installation

You can install the package via composer:

``` bash
composer require ghostwriter/github-cli
```

### Star ⭐️ this repo if you find it useful

You can also star (🌟) this repo to find it easier later.

## Usage

Every method accepts variadic `string ...$arguments`

This means:

* Arguments are passed exactly like the CLI
* No escaping issues

Example:

```sh
gh issue create --title "Bug" --body "Something broke"
```

Becomes:

```php
$gh = \Ghostwriter\GitHubCli\GitHubCli::new();

$result = $gh->issueCreate('--title', 'Bug', '--body', 'Something broke');

$result->exitCode(); // int
$result->stdout();   // string
$result->stderr();   // string
```

### Documentation

Please see [docs/](./docs/) for more information on how to use this package.

### Credits

- [Nathanael Esayeas](https://github.com/ghostwriter)
- [All Contributors](https://github.com/ghostwriter/wip/contributors)

### Changelog

Please see [CHANGELOG.md](./CHANGELOG.md) for more information on what has changed recently.

### License

Please see [LICENSE](./LICENSE) for more information on the license that applies to this project.

### Security

Please see [SECURITY.md](./SECURITY.md) for more information on security disclosure process.
