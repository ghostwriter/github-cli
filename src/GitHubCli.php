<?php

declare(strict_types=1);

namespace Ghostwriter\GitHubCli;

use Ghostwriter\Container\Container;
use Ghostwriter\GitHubCli\Exception\GitHubCliException;
use Ghostwriter\GitHubCli\Interface\GitHubCliInterface;
use Ghostwriter\Shell\Interface\ResultInterface;
use Ghostwriter\Shell\Interface\ShellInterface;
use Override;

use function implode;
use function mb_trim;
use function sprintf;

/** @see GitHubCliTest */
final readonly class GitHubCli implements GitHubCliInterface
{
    public function __construct(
        private ShellInterface $shell,
    ) {}

    public static function new(): self
    {
        return Container::getInstance()->get(self::class);
    }

    #[Override]
    public function agentTask(string ...$arguments): ResultInterface
    {
        return $this->execute('agent-task', ...$arguments);
    }

    #[Override]
    public function agentTaskCreate(string ...$arguments): ResultInterface
    {
        return $this->agentTask('create', ...$arguments);
    }

    #[Override]
    public function agentTaskList(string ...$arguments): ResultInterface
    {
        return $this->agentTask('list', ...$arguments);
    }

    #[Override]
    public function agentTaskView(string ...$arguments): ResultInterface
    {
        return $this->agentTask('view', ...$arguments);
    }

    #[Override]
    public function alias(string ...$arguments): ResultInterface
    {
        return $this->execute('alias', ...$arguments);
    }

    #[Override]
    public function aliasDelete(string ...$arguments): ResultInterface
    {
        return $this->alias('delete', ...$arguments);
    }

    #[Override]
    public function aliasImport(string ...$arguments): ResultInterface
    {
        return $this->alias('import', ...$arguments);
    }

    #[Override]
    public function aliasList(string ...$arguments): ResultInterface
    {
        return $this->alias('list', ...$arguments);
    }

    #[Override]
    public function aliasSet(string ...$arguments): ResultInterface
    {
        return $this->alias('set', ...$arguments);
    }

    #[Override]
    public function api(string ...$arguments): ResultInterface
    {
        return $this->execute('api', ...$arguments);
    }

    #[Override]
    public function attestation(string ...$arguments): ResultInterface
    {
        return $this->execute('attestation', ...$arguments);
    }

    #[Override]
    public function attestationDownload(string ...$arguments): ResultInterface
    {
        return $this->attestation('download', ...$arguments);
    }

    #[Override]
    public function attestationTrustedRoot(string ...$arguments): ResultInterface
    {
        return $this->attestation('trusted-root', ...$arguments);
    }

    #[Override]
    public function attestationVerify(string ...$arguments): ResultInterface
    {
        return $this->attestation('verify', ...$arguments);
    }

    #[Override]
    public function auth(string ...$arguments): ResultInterface
    {
        return $this->execute('auth', ...$arguments);
    }

    #[Override]
    public function authLogin(string ...$arguments): ResultInterface
    {
        return $this->auth('login', ...$arguments);
    }

    #[Override]
    public function authLogout(string ...$arguments): ResultInterface
    {
        return $this->auth('logout', ...$arguments);
    }

    #[Override]
    public function authRefresh(string ...$arguments): ResultInterface
    {
        return $this->auth('refresh', ...$arguments);
    }

    #[Override]
    public function authSetupGit(string ...$arguments): ResultInterface
    {
        return $this->auth('setup-git', ...$arguments);
    }

    #[Override]
    public function authStatus(string ...$arguments): ResultInterface
    {
        return $this->auth('status', ...$arguments);
    }

    #[Override]
    public function authSwitch(string ...$arguments): ResultInterface
    {
        return $this->auth('switch', ...$arguments);
    }

    #[Override]
    public function authToken(string ...$arguments): ResultInterface
    {
        return $this->auth('token', ...$arguments);
    }

    #[Override]
    public function browse(string ...$arguments): ResultInterface
    {
        return $this->execute('browse', ...$arguments);
    }

    #[Override]
    public function cache(string ...$arguments): ResultInterface
    {
        return $this->execute('cache', ...$arguments);
    }

    #[Override]
    public function cacheDelete(string ...$arguments): ResultInterface
    {
        return $this->cache('delete', ...$arguments);
    }

    #[Override]
    public function cacheList(string ...$arguments): ResultInterface
    {
        return $this->cache('list', ...$arguments);
    }

    #[Override]
    public function codespace(string ...$arguments): ResultInterface
    {
        return $this->execute('codespace', ...$arguments);
    }

    #[Override]
    public function codespaceCode(string ...$arguments): ResultInterface
    {
        return $this->codespace('code', ...$arguments);
    }

    #[Override]
    public function codespaceCp(string ...$arguments): ResultInterface
    {
        return $this->codespace('cp', ...$arguments);
    }

    #[Override]
    public function codespaceCreate(string ...$arguments): ResultInterface
    {
        return $this->codespace('create', ...$arguments);
    }

    #[Override]
    public function codespaceDelete(string ...$arguments): ResultInterface
    {
        return $this->codespace('delete', ...$arguments);
    }

    #[Override]
    public function codespaceEdit(string ...$arguments): ResultInterface
    {
        return $this->codespace('edit', ...$arguments);
    }

    #[Override]
    public function codespaceJupyter(string ...$arguments): ResultInterface
    {
        return $this->codespace('jupyter', ...$arguments);
    }

    #[Override]
    public function codespaceList(string ...$arguments): ResultInterface
    {
        return $this->codespace('list', ...$arguments);
    }

    #[Override]
    public function codespaceLogs(string ...$arguments): ResultInterface
    {
        return $this->codespace('logs', ...$arguments);
    }

    #[Override]
    public function codespacePorts(string ...$arguments): ResultInterface
    {
        return $this->codespace('ports', ...$arguments);
    }

    #[Override]
    public function codespaceRebuild(string ...$arguments): ResultInterface
    {
        return $this->codespace('rebuild', ...$arguments);
    }

    #[Override]
    public function codespaceSsh(string ...$arguments): ResultInterface
    {
        return $this->codespace('ssh', ...$arguments);
    }

    #[Override]
    public function codespaceStop(string ...$arguments): ResultInterface
    {
        return $this->codespace('stop', ...$arguments);
    }

    #[Override]
    public function codespaceView(string ...$arguments): ResultInterface
    {
        return $this->codespace('view', ...$arguments);
    }

    #[Override]
    public function completion(string ...$arguments): ResultInterface
    {
        return $this->execute('completion', ...$arguments);
    }

    #[Override]
    public function config(string ...$arguments): ResultInterface
    {
        return $this->execute('config', ...$arguments);
    }

    #[Override]
    public function configClearCache(string ...$arguments): ResultInterface
    {
        return $this->config('clear-cache', ...$arguments);
    }

    #[Override]
    public function configGet(string ...$arguments): ResultInterface
    {
        return $this->config('get', ...$arguments);
    }

    #[Override]
    public function configList(string ...$arguments): ResultInterface
    {
        return $this->config('list', ...$arguments);
    }

    #[Override]
    public function configSet(string ...$arguments): ResultInterface
    {
        return $this->config('set', ...$arguments);
    }

    #[Override]
    public function execute(string ...$arguments): ResultInterface
    {
        $result = $this->shell->execute('gh', $arguments);

        if (0 !== $result->exitCode()) {
            throw new GitHubCliException(
                sprintf(
                    "GitHub CLI command failed.\nCommand: gh %s\nExit Code: %d\nStdout: %s\nStderr: %s\n",
                    implode(' ', $arguments),
                    $result->exitCode(),
                    mb_trim($result->stdout()),
                    mb_trim($result->stderr()),
                ),
                $result->exitCode(),
            );
        }

        return $result;
    }

    #[Override]
    public function extension(string ...$arguments): ResultInterface
    {
        return $this->execute('extension', ...$arguments);
    }

    #[Override]
    public function extensionBrowse(string ...$arguments): ResultInterface
    {
        return $this->extension('browse', ...$arguments);
    }

    #[Override]
    public function extensionCreate(string ...$arguments): ResultInterface
    {
        return $this->extension('create', ...$arguments);
    }

    #[Override]
    public function extensionExec(string ...$arguments): ResultInterface
    {
        return $this->extension('exec', ...$arguments);
    }

    #[Override]
    public function extensionInstall(string ...$arguments): ResultInterface
    {
        return $this->extension('install', ...$arguments);
    }

    #[Override]
    public function extensionList(string ...$arguments): ResultInterface
    {
        return $this->extension('list', ...$arguments);
    }

    #[Override]
    public function extensionRemove(string ...$arguments): ResultInterface
    {
        return $this->extension('remove', ...$arguments);
    }

    #[Override]
    public function extensionSearch(string ...$arguments): ResultInterface
    {
        return $this->extension('search', ...$arguments);
    }

    #[Override]
    public function extensionUpgrade(string ...$arguments): ResultInterface
    {
        return $this->extension('upgrade', ...$arguments);
    }

    #[Override]
    public function gist(string ...$arguments): ResultInterface
    {
        return $this->execute('gist', ...$arguments);
    }

    #[Override]
    public function gistClone(string ...$arguments): ResultInterface
    {
        return $this->gist('clone', ...$arguments);
    }

    #[Override]
    public function gistCreate(string ...$arguments): ResultInterface
    {
        return $this->gist('create', ...$arguments);
    }

    #[Override]
    public function gistDelete(string ...$arguments): ResultInterface
    {
        return $this->gist('delete', ...$arguments);
    }

    #[Override]
    public function gistEdit(string ...$arguments): ResultInterface
    {
        return $this->gist('edit', ...$arguments);
    }

    #[Override]
    public function gistList(string ...$arguments): ResultInterface
    {
        return $this->gist('list', ...$arguments);
    }

    #[Override]
    public function gistRename(string ...$arguments): ResultInterface
    {
        return $this->gist('rename', ...$arguments);
    }

    #[Override]
    public function gistView(string ...$arguments): ResultInterface
    {
        return $this->gist('view', ...$arguments);
    }

    #[Override]
    public function gpgKey(string ...$arguments): ResultInterface
    {
        return $this->execute('gpg-key', ...$arguments);
    }

    #[Override]
    public function gpgKeyAdd(string ...$arguments): ResultInterface
    {
        return $this->gpgKey('add', ...$arguments);
    }

    #[Override]
    public function gpgKeyDelete(string ...$arguments): ResultInterface
    {
        return $this->gpgKey('delete', ...$arguments);
    }

    #[Override]
    public function gpgKeyList(string ...$arguments): ResultInterface
    {
        return $this->gpgKey('list', ...$arguments);
    }

    #[Override]
    public function help(string ...$arguments): ResultInterface
    {
        return $this->execute('help', ...$arguments);
    }

    #[Override]
    public function issue(string ...$arguments): ResultInterface
    {
        return $this->execute('issue', ...$arguments);
    }

    #[Override]
    public function issueClose(string ...$arguments): ResultInterface
    {
        return $this->issue('close', ...$arguments);
    }

    #[Override]
    public function issueComment(string ...$arguments): ResultInterface
    {
        return $this->issue('comment', ...$arguments);
    }

    #[Override]
    public function issueCreate(string ...$arguments): ResultInterface
    {
        return $this->issue('create', ...$arguments);
    }

    #[Override]
    public function issueDelete(string ...$arguments): ResultInterface
    {
        return $this->issue('delete', ...$arguments);
    }

    #[Override]
    public function issueDevelop(string ...$arguments): ResultInterface
    {
        return $this->issue('develop', ...$arguments);
    }

    #[Override]
    public function issueEdit(string ...$arguments): ResultInterface
    {
        return $this->issue('edit', ...$arguments);
    }

    #[Override]
    public function issueList(string ...$arguments): ResultInterface
    {
        return $this->issue('list', ...$arguments);
    }

    #[Override]
    public function issueLock(string ...$arguments): ResultInterface
    {
        return $this->issue('lock', ...$arguments);
    }

    #[Override]
    public function issuePin(string ...$arguments): ResultInterface
    {
        return $this->issue('pin', ...$arguments);
    }

    #[Override]
    public function issueReopen(string ...$arguments): ResultInterface
    {
        return $this->issue('reopen', ...$arguments);
    }

    #[Override]
    public function issueStatus(string ...$arguments): ResultInterface
    {
        return $this->issue('status', ...$arguments);
    }

    #[Override]
    public function issueTransfer(string ...$arguments): ResultInterface
    {
        return $this->issue('transfer', ...$arguments);
    }

    #[Override]
    public function issueUnlock(string ...$arguments): ResultInterface
    {
        return $this->issue('unlock', ...$arguments);
    }

    #[Override]
    public function issueUnpin(string ...$arguments): ResultInterface
    {
        return $this->issue('unpin', ...$arguments);
    }

    #[Override]
    public function issueView(string ...$arguments): ResultInterface
    {
        return $this->issue('view', ...$arguments);
    }

    #[Override]
    public function label(string ...$arguments): ResultInterface
    {
        return $this->execute('label', ...$arguments);
    }

    #[Override]
    public function labelClone(string ...$arguments): ResultInterface
    {
        return $this->label('clone', ...$arguments);
    }

    #[Override]
    public function labelCreate(string ...$arguments): ResultInterface
    {
        return $this->label('create', ...$arguments);
    }

    #[Override]
    public function labelDelete(string ...$arguments): ResultInterface
    {
        return $this->label('delete', ...$arguments);
    }

    #[Override]
    public function labelEdit(string ...$arguments): ResultInterface
    {
        return $this->label('edit', ...$arguments);
    }

    #[Override]
    public function labelList(string ...$arguments): ResultInterface
    {
        return $this->label('list', ...$arguments);
    }

    #[Override]
    public function org(string ...$arguments): ResultInterface
    {
        return $this->execute('org', ...$arguments);
    }

    #[Override]
    public function orgList(string ...$arguments): ResultInterface
    {
        return $this->org('list', ...$arguments);
    }

    #[Override]
    public function pr(string ...$arguments): ResultInterface
    {
        return $this->execute('pr', ...$arguments);
    }

    #[Override]
    public function prCheckout(string ...$arguments): ResultInterface
    {
        return $this->pr('checkout', ...$arguments);
    }

    #[Override]
    public function prChecks(string ...$arguments): ResultInterface
    {
        return $this->pr('checks', ...$arguments);
    }

    #[Override]
    public function prClose(string ...$arguments): ResultInterface
    {
        return $this->pr('close', ...$arguments);
    }

    #[Override]
    public function prComment(string ...$arguments): ResultInterface
    {
        return $this->pr('comment', ...$arguments);
    }

    #[Override]
    public function prCreate(string ...$arguments): ResultInterface
    {
        return $this->pr('create', ...$arguments);
    }

    #[Override]
    public function prDiff(string ...$arguments): ResultInterface
    {
        return $this->pr('diff', ...$arguments);
    }

    #[Override]
    public function prEdit(string ...$arguments): ResultInterface
    {
        return $this->pr('edit', ...$arguments);
    }

    #[Override]
    public function prList(string ...$arguments): ResultInterface
    {
        return $this->pr('list', ...$arguments);
    }

    #[Override]
    public function prLock(string ...$arguments): ResultInterface
    {
        return $this->pr('lock', ...$arguments);
    }

    #[Override]
    public function prMerge(string ...$arguments): ResultInterface
    {
        return $this->pr('merge', ...$arguments);
    }

    #[Override]
    public function prReady(string ...$arguments): ResultInterface
    {
        return $this->pr('ready', ...$arguments);
    }

    #[Override]
    public function prReopen(string ...$arguments): ResultInterface
    {
        return $this->pr('reopen', ...$arguments);
    }

    #[Override]
    public function prRevert(string ...$arguments): ResultInterface
    {
        return $this->pr('revert', ...$arguments);
    }

    #[Override]
    public function prReview(string ...$arguments): ResultInterface
    {
        return $this->pr('review', ...$arguments);
    }

    #[Override]
    public function prStatus(string ...$arguments): ResultInterface
    {
        return $this->pr('status', ...$arguments);
    }

    #[Override]
    public function prUnlock(string ...$arguments): ResultInterface
    {
        return $this->pr('unlock', ...$arguments);
    }

    #[Override]
    public function prUpdateBranch(string ...$arguments): ResultInterface
    {
        return $this->pr('update-branch', ...$arguments);
    }

    #[Override]
    public function prView(string ...$arguments): ResultInterface
    {
        return $this->pr('view', ...$arguments);
    }

    #[Override]
    public function preview(string ...$arguments): ResultInterface
    {
        return $this->execute('preview', ...$arguments);
    }

    #[Override]
    public function previewPrompter(string ...$arguments): ResultInterface
    {
        return $this->preview('prompter', ...$arguments);
    }

    #[Override]
    public function project(string ...$arguments): ResultInterface
    {
        return $this->execute('project', ...$arguments);
    }

    #[Override]
    public function projectClose(string ...$arguments): ResultInterface
    {
        return $this->project('close', ...$arguments);
    }

    #[Override]
    public function projectCopy(string ...$arguments): ResultInterface
    {
        return $this->project('copy', ...$arguments);
    }

    #[Override]
    public function projectCreate(string ...$arguments): ResultInterface
    {
        return $this->project('create', ...$arguments);
    }

    #[Override]
    public function projectDelete(string ...$arguments): ResultInterface
    {
        return $this->project('delete', ...$arguments);
    }

    #[Override]
    public function projectEdit(string ...$arguments): ResultInterface
    {
        return $this->project('edit', ...$arguments);
    }

    #[Override]
    public function projectFieldCreate(string ...$arguments): ResultInterface
    {
        return $this->project('field-create', ...$arguments);
    }

    #[Override]
    public function projectFieldDelete(string ...$arguments): ResultInterface
    {
        return $this->project('field-delete', ...$arguments);
    }

    #[Override]
    public function projectFieldList(string ...$arguments): ResultInterface
    {
        return $this->project('field-list', ...$arguments);
    }

    #[Override]
    public function projectItemAdd(string ...$arguments): ResultInterface
    {
        return $this->project('item-add', ...$arguments);
    }

    #[Override]
    public function projectItemArchive(string ...$arguments): ResultInterface
    {
        return $this->project('item-archive', ...$arguments);
    }

    #[Override]
    public function projectItemCreate(string ...$arguments): ResultInterface
    {
        return $this->project('item-create', ...$arguments);
    }

    #[Override]
    public function projectItemDelete(string ...$arguments): ResultInterface
    {
        return $this->project('item-delete', ...$arguments);
    }

    #[Override]
    public function projectItemEdit(string ...$arguments): ResultInterface
    {
        return $this->project('item-edit', ...$arguments);
    }

    #[Override]
    public function projectItemList(string ...$arguments): ResultInterface
    {
        return $this->project('item-list', ...$arguments);
    }

    #[Override]
    public function projectLink(string ...$arguments): ResultInterface
    {
        return $this->project('link', ...$arguments);
    }

    #[Override]
    public function projectList(string ...$arguments): ResultInterface
    {
        return $this->project('list', ...$arguments);
    }

    #[Override]
    public function projectMarkTemplate(string ...$arguments): ResultInterface
    {
        return $this->project('mark-template', ...$arguments);
    }

    #[Override]
    public function projectUnlink(string ...$arguments): ResultInterface
    {
        return $this->project('unlink', ...$arguments);
    }

    #[Override]
    public function projectView(string ...$arguments): ResultInterface
    {
        return $this->project('view', ...$arguments);
    }

    #[Override]
    public function release(string ...$arguments): ResultInterface
    {
        return $this->execute('release', ...$arguments);
    }

    #[Override]
    public function releaseCreate(string ...$arguments): ResultInterface
    {
        return $this->release('create', ...$arguments);
    }

    #[Override]
    public function releaseDelete(string ...$arguments): ResultInterface
    {
        return $this->release('delete', ...$arguments);
    }

    #[Override]
    public function releaseDeleteAsset(string ...$arguments): ResultInterface
    {
        return $this->release('delete-asset', ...$arguments);
    }

    #[Override]
    public function releaseDownload(string ...$arguments): ResultInterface
    {
        return $this->release('download', ...$arguments);
    }

    #[Override]
    public function releaseEdit(string ...$arguments): ResultInterface
    {
        return $this->release('edit', ...$arguments);
    }

    #[Override]
    public function releaseList(string ...$arguments): ResultInterface
    {
        return $this->release('list', ...$arguments);
    }

    #[Override]
    public function releaseUpload(string ...$arguments): ResultInterface
    {
        return $this->release('upload', ...$arguments);
    }

    #[Override]
    public function releaseVerify(string ...$arguments): ResultInterface
    {
        return $this->release('verify', ...$arguments);
    }

    #[Override]
    public function releaseVerifyAsset(string ...$arguments): ResultInterface
    {
        return $this->release('verify-asset', ...$arguments);
    }

    #[Override]
    public function repo(string ...$arguments): ResultInterface
    {
        return $this->execute('repo', ...$arguments);
    }

    #[Override]
    public function repoArchive(string ...$arguments): ResultInterface
    {
        return $this->repo('archive', ...$arguments);
    }

    #[Override]
    public function repoAutolink(string ...$arguments): ResultInterface
    {
        return $this->repo('autolink', ...$arguments);
    }

    #[Override]
    public function repoClone(string ...$arguments): ResultInterface
    {
        return $this->repo('clone', ...$arguments);
    }

    #[Override]
    public function repoCreate(string ...$arguments): ResultInterface
    {
        return $this->repo('create', ...$arguments);
    }

    #[Override]
    public function repoDelete(string ...$arguments): ResultInterface
    {
        return $this->repo('delete', ...$arguments);
    }

    #[Override]
    public function repoDeployKey(string ...$arguments): ResultInterface
    {
        return $this->repo('deploy-key', ...$arguments);
    }

    #[Override]
    public function repoEdit(string ...$arguments): ResultInterface
    {
        return $this->repo('edit', ...$arguments);
    }

    #[Override]
    public function repoFork(string ...$arguments): ResultInterface
    {
        return $this->repo('fork', ...$arguments);
    }

    #[Override]
    public function repoGitignore(string ...$arguments): ResultInterface
    {
        return $this->repo('gitignore', ...$arguments);
    }

    #[Override]
    public function repoLicense(string ...$arguments): ResultInterface
    {
        return $this->repo('license', ...$arguments);
    }

    #[Override]
    public function repoList(string ...$arguments): ResultInterface
    {
        return $this->repo('list', ...$arguments);
    }

    #[Override]
    public function repoRename(string ...$arguments): ResultInterface
    {
        return $this->repo('rename', ...$arguments);
    }

    #[Override]
    public function repoSetDefault(string ...$arguments): ResultInterface
    {
        return $this->repo('set-default', ...$arguments);
    }

    #[Override]
    public function repoSync(string ...$arguments): ResultInterface
    {
        return $this->repo('sync', ...$arguments);
    }

    #[Override]
    public function repoUnarchive(string ...$arguments): ResultInterface
    {
        return $this->repo('unarchive', ...$arguments);
    }

    #[Override]
    public function repoView(string ...$arguments): ResultInterface
    {
        return $this->repo('view', ...$arguments);
    }

    #[Override]
    public function ruleset(string ...$arguments): ResultInterface
    {
        return $this->execute('ruleset', ...$arguments);
    }

    #[Override]
    public function rulesetCheck(string ...$arguments): ResultInterface
    {
        return $this->ruleset('check', ...$arguments);
    }

    #[Override]
    public function rulesetList(string ...$arguments): ResultInterface
    {
        return $this->ruleset('list', ...$arguments);
    }

    #[Override]
    public function rulesetView(string ...$arguments): ResultInterface
    {
        return $this->ruleset('view', ...$arguments);
    }

    #[Override]
    public function run(string ...$arguments): ResultInterface
    {
        return $this->execute('run', ...$arguments);
    }

    #[Override]
    public function runCancel(string ...$arguments): ResultInterface
    {
        return $this->run('cancel', ...$arguments);
    }

    #[Override]
    public function runDelete(string ...$arguments): ResultInterface
    {
        return $this->run('delete', ...$arguments);
    }

    #[Override]
    public function runDownload(string ...$arguments): ResultInterface
    {
        return $this->run('download', ...$arguments);
    }

    #[Override]
    public function runList(string ...$arguments): ResultInterface
    {
        return $this->run('list', ...$arguments);
    }

    #[Override]
    public function runRerun(string ...$arguments): ResultInterface
    {
        return $this->run('rerun', ...$arguments);
    }

    #[Override]
    public function runView(string ...$arguments): ResultInterface
    {
        return $this->run('view', ...$arguments);
    }

    #[Override]
    public function runWatch(string ...$arguments): ResultInterface
    {
        return $this->run('watch', ...$arguments);
    }

    #[Override]
    public function search(string ...$arguments): ResultInterface
    {
        return $this->execute('search', ...$arguments);
    }

    #[Override]
    public function searchCode(string ...$arguments): ResultInterface
    {
        return $this->search('code', ...$arguments);
    }

    #[Override]
    public function searchCommits(string ...$arguments): ResultInterface
    {
        return $this->search('commits', ...$arguments);
    }

    #[Override]
    public function searchIssues(string ...$arguments): ResultInterface
    {
        return $this->search('issues', ...$arguments);
    }

    #[Override]
    public function searchPrs(string ...$arguments): ResultInterface
    {
        return $this->search('prs', ...$arguments);
    }

    #[Override]
    public function searchRepos(string ...$arguments): ResultInterface
    {
        return $this->search('repos', ...$arguments);
    }

    #[Override]
    public function secret(string ...$arguments): ResultInterface
    {
        return $this->execute('secret', ...$arguments);
    }

    #[Override]
    public function secretDelete(string ...$arguments): ResultInterface
    {
        return $this->secret('delete', ...$arguments);
    }

    #[Override]
    public function secretList(string ...$arguments): ResultInterface
    {
        return $this->secret('list', ...$arguments);
    }

    #[Override]
    public function secretSet(string ...$arguments): ResultInterface
    {
        return $this->secret('set', ...$arguments);
    }

    #[Override]
    public function sshKey(string ...$arguments): ResultInterface
    {
        return $this->execute('ssh-key', ...$arguments);
    }

    #[Override]
    public function sshKeyAdd(string ...$arguments): ResultInterface
    {
        return $this->sshKey('add', ...$arguments);
    }

    #[Override]
    public function sshKeyDelete(string ...$arguments): ResultInterface
    {
        return $this->sshKey('delete', ...$arguments);
    }

    #[Override]
    public function sshKeyList(string ...$arguments): ResultInterface
    {
        return $this->sshKey('list', ...$arguments);
    }

    #[Override]
    public function status(string ...$arguments): ResultInterface
    {
        return $this->execute('status', ...$arguments);
    }

    #[Override]
    public function variable(string ...$arguments): ResultInterface
    {
        return $this->execute('variable', ...$arguments);
    }

    #[Override]
    public function variableDelete(string ...$arguments): ResultInterface
    {
        return $this->variable('delete', ...$arguments);
    }

    #[Override]
    public function variableGet(string ...$arguments): ResultInterface
    {
        return $this->variable('get', ...$arguments);
    }

    #[Override]
    public function variableList(string ...$arguments): ResultInterface
    {
        return $this->variable('list', ...$arguments);
    }

    #[Override]
    public function variableSet(string ...$arguments): ResultInterface
    {
        return $this->variable('set', ...$arguments);
    }

    #[Override]
    public function workflow(string ...$arguments): ResultInterface
    {
        return $this->execute('workflow', ...$arguments);
    }

    #[Override]
    public function workflowDisable(string ...$arguments): ResultInterface
    {
        return $this->workflow('disable', ...$arguments);
    }

    #[Override]
    public function workflowEnable(string ...$arguments): ResultInterface
    {
        return $this->workflow('enable', ...$arguments);
    }

    #[Override]
    public function workflowList(string ...$arguments): ResultInterface
    {
        return $this->workflow('list', ...$arguments);
    }

    #[Override]
    public function workflowRun(string ...$arguments): ResultInterface
    {
        return $this->workflow('run', ...$arguments);
    }

    #[Override]
    public function workflowView(string ...$arguments): ResultInterface
    {
        return $this->workflow('view', ...$arguments);
    }
}
