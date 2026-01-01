<?php

declare(strict_types=1);

namespace Ghostwriter\GitHubCli\Interface;

use Ghostwriter\Shell\Interface\ResultInterface;

interface GitHubCliInterface
{
    /** gh agent-task */
    public function agentTask(string ...$arguments): ResultInterface;

    /** gh agent-task create */
    public function agentTaskCreate(string ...$arguments): ResultInterface;

    /** gh agent-task list */
    public function agentTaskList(string ...$arguments): ResultInterface;

    /** gh agent-task view */
    public function agentTaskView(string ...$arguments): ResultInterface;

    /** gh alias */
    public function alias(string ...$arguments): ResultInterface;

    /** gh alias delete */
    public function aliasDelete(string ...$arguments): ResultInterface;

    /** gh alias import */
    public function aliasImport(string ...$arguments): ResultInterface;

    /** gh alias list */
    public function aliasList(string ...$arguments): ResultInterface;

    /** gh alias set */
    public function aliasSet(string ...$arguments): ResultInterface;

    /** gh api */
    public function api(string ...$arguments): ResultInterface;

    /** gh attestation */
    public function attestation(string ...$arguments): ResultInterface;

    /** gh attestation download */
    public function attestationDownload(string ...$arguments): ResultInterface;

    /** gh attestation trusted-root */
    public function attestationTrustedRoot(string ...$arguments): ResultInterface;

    /** gh attestation verify */
    public function attestationVerify(string ...$arguments): ResultInterface;

    /** gh auth */
    public function auth(string ...$arguments): ResultInterface;

    /** gh auth login */
    public function authLogin(string ...$arguments): ResultInterface;

    /** gh auth logout */
    public function authLogout(string ...$arguments): ResultInterface;

    /** gh auth refresh */
    public function authRefresh(string ...$arguments): ResultInterface;

    /** gh auth setup-git */
    public function authSetupGit(string ...$arguments): ResultInterface;

    /** gh auth status */
    public function authStatus(string ...$arguments): ResultInterface;

    /** gh auth switch */
    public function authSwitch(string ...$arguments): ResultInterface;

    /** gh auth token */
    public function authToken(string ...$arguments): ResultInterface;

    /** gh browse */
    public function browse(string ...$arguments): ResultInterface;

    /** gh cache */
    public function cache(string ...$arguments): ResultInterface;

    /** gh cache delete */
    public function cacheDelete(string ...$arguments): ResultInterface;

    /** gh cache list */
    public function cacheList(string ...$arguments): ResultInterface;

    /** gh codespace */
    public function codespace(string ...$arguments): ResultInterface;

    /** gh codespace code */
    public function codespaceCode(string ...$arguments): ResultInterface;

    /** gh codespace cp */
    public function codespaceCp(string ...$arguments): ResultInterface;

    /** gh codespace create */
    public function codespaceCreate(string ...$arguments): ResultInterface;

    /** gh codespace delete */
    public function codespaceDelete(string ...$arguments): ResultInterface;

    /** gh codespace edit */
    public function codespaceEdit(string ...$arguments): ResultInterface;

    /** gh codespace jupyter */
    public function codespaceJupyter(string ...$arguments): ResultInterface;

    /** gh codespace list */
    public function codespaceList(string ...$arguments): ResultInterface;

    /** gh codespace logs */
    public function codespaceLogs(string ...$arguments): ResultInterface;

    /** gh codespace ports */
    public function codespacePorts(string ...$arguments): ResultInterface;

    /** gh codespace rebuild */
    public function codespaceRebuild(string ...$arguments): ResultInterface;

    /** gh codespace ssh */
    public function codespaceSsh(string ...$arguments): ResultInterface;

    /** gh codespace stop */
    public function codespaceStop(string ...$arguments): ResultInterface;

    /** gh codespace view */
    public function codespaceView(string ...$arguments): ResultInterface;

    /** gh completion */
    public function completion(string ...$arguments): ResultInterface;

    /** gh config */
    public function config(string ...$arguments): ResultInterface;

    /** gh config clear-cache */
    public function configClearCache(string ...$arguments): ResultInterface;

    /** gh config get */
    public function configGet(string ...$arguments): ResultInterface;

    /** gh config list */
    public function configList(string ...$arguments): ResultInterface;

    /** gh config set */
    public function configSet(string ...$arguments): ResultInterface;

    /** gh */
    public function execute(string ...$arguments): ResultInterface;

    /** gh extension */
    public function extension(string ...$arguments): ResultInterface;

    /** gh extension browse */
    public function extensionBrowse(string ...$arguments): ResultInterface;

    /** gh extension create */
    public function extensionCreate(string ...$arguments): ResultInterface;

    /** gh extension exec */
    public function extensionExec(string ...$arguments): ResultInterface;

    /** gh extension install */
    public function extensionInstall(string ...$arguments): ResultInterface;

    /** gh extension list */
    public function extensionList(string ...$arguments): ResultInterface;

    /** gh extension remove */
    public function extensionRemove(string ...$arguments): ResultInterface;

    /** gh extension search */
    public function extensionSearch(string ...$arguments): ResultInterface;

    /** gh extension upgrade */
    public function extensionUpgrade(string ...$arguments): ResultInterface;

    /** gh gist */
    public function gist(string ...$arguments): ResultInterface;

    /** gh gist clone */
    public function gistClone(string ...$arguments): ResultInterface;

    /** gh gist create */
    public function gistCreate(string ...$arguments): ResultInterface;

    /** gh gist delete */
    public function gistDelete(string ...$arguments): ResultInterface;

    /** gh gist edit */
    public function gistEdit(string ...$arguments): ResultInterface;

    /** gh gist list */
    public function gistList(string ...$arguments): ResultInterface;

    /** gh gist rename */
    public function gistRename(string ...$arguments): ResultInterface;

    /** gh gist view */
    public function gistView(string ...$arguments): ResultInterface;

    /** gh gpg-key */
    public function gpgKey(string ...$arguments): ResultInterface;

    /** gh gpg-key add */
    public function gpgKeyAdd(string ...$arguments): ResultInterface;

    /** gh gpg-key delete */
    public function gpgKeyDelete(string ...$arguments): ResultInterface;

    /** gh gpg-key list */
    public function gpgKeyList(string ...$arguments): ResultInterface;

    /** gh help */
    public function help(string ...$arguments): ResultInterface;

    /** gh issue */
    public function issue(string ...$arguments): ResultInterface;

    /** gh issue close */
    public function issueClose(string ...$arguments): ResultInterface;

    /** gh issue comment */
    public function issueComment(string ...$arguments): ResultInterface;

    /** gh issue create */
    public function issueCreate(string ...$arguments): ResultInterface;

    /** gh issue delete */
    public function issueDelete(string ...$arguments): ResultInterface;

    /** gh issue develop */
    public function issueDevelop(string ...$arguments): ResultInterface;

    /** gh issue edit */
    public function issueEdit(string ...$arguments): ResultInterface;

    /** gh issue list */
    public function issueList(string ...$arguments): ResultInterface;

    /** gh issue lock */
    public function issueLock(string ...$arguments): ResultInterface;

    /** gh issue pin */
    public function issuePin(string ...$arguments): ResultInterface;

    /** gh issue reopen */
    public function issueReopen(string ...$arguments): ResultInterface;

    /** gh issue status */
    public function issueStatus(string ...$arguments): ResultInterface;

    /** gh issue transfer */
    public function issueTransfer(string ...$arguments): ResultInterface;

    /** gh issue unlock */
    public function issueUnlock(string ...$arguments): ResultInterface;

    /** gh issue unpin */
    public function issueUnpin(string ...$arguments): ResultInterface;

    /** gh issue view */
    public function issueView(string ...$arguments): ResultInterface;

    /** gh label */
    public function label(string ...$arguments): ResultInterface;

    /** gh label clone */
    public function labelClone(string ...$arguments): ResultInterface;

    /** gh label create */
    public function labelCreate(string ...$arguments): ResultInterface;

    /** gh label delete */
    public function labelDelete(string ...$arguments): ResultInterface;

    /** gh label edit */
    public function labelEdit(string ...$arguments): ResultInterface;

    /** gh label list */
    public function labelList(string ...$arguments): ResultInterface;

    /** gh org */
    public function org(string ...$arguments): ResultInterface;

    /** gh org list */
    public function orgList(string ...$arguments): ResultInterface;

    /** gh pr */
    public function pr(string ...$arguments): ResultInterface;

    /** gh pr checkout */
    public function prCheckout(string ...$arguments): ResultInterface;

    /** gh pr checks */
    public function prChecks(string ...$arguments): ResultInterface;

    /** gh pr close */
    public function prClose(string ...$arguments): ResultInterface;

    /** gh pr comment */
    public function prComment(string ...$arguments): ResultInterface;

    /** gh pr create */
    public function prCreate(string ...$arguments): ResultInterface;

    /** gh pr diff */
    public function prDiff(string ...$arguments): ResultInterface;

    /** gh pr edit */
    public function prEdit(string ...$arguments): ResultInterface;

    /** gh pr list */
    public function prList(string ...$arguments): ResultInterface;

    /** gh pr lock */
    public function prLock(string ...$arguments): ResultInterface;

    /** gh pr merge */
    public function prMerge(string ...$arguments): ResultInterface;

    /** gh pr ready */
    public function prReady(string ...$arguments): ResultInterface;

    /** gh pr reopen */
    public function prReopen(string ...$arguments): ResultInterface;

    /** gh pr revert */
    public function prRevert(string ...$arguments): ResultInterface;

    /** gh pr review */
    public function prReview(string ...$arguments): ResultInterface;

    /** gh pr status */
    public function prStatus(string ...$arguments): ResultInterface;

    /** gh pr unlock */
    public function prUnlock(string ...$arguments): ResultInterface;

    /** gh pr update-branch */
    public function prUpdateBranch(string ...$arguments): ResultInterface;

    /** gh pr view */
    public function prView(string ...$arguments): ResultInterface;

    /** gh preview */
    public function preview(string ...$arguments): ResultInterface;

    /** gh preview prompter */
    public function previewPrompter(string ...$arguments): ResultInterface;

    /** gh project */
    public function project(string ...$arguments): ResultInterface;

    /** gh project close */
    public function projectClose(string ...$arguments): ResultInterface;

    /** gh project copy */
    public function projectCopy(string ...$arguments): ResultInterface;

    /** gh project create */
    public function projectCreate(string ...$arguments): ResultInterface;

    /** gh project delete */
    public function projectDelete(string ...$arguments): ResultInterface;

    /** gh project edit */
    public function projectEdit(string ...$arguments): ResultInterface;

    /** gh project field-create */
    public function projectFieldCreate(string ...$arguments): ResultInterface;

    /** gh project field-delete */
    public function projectFieldDelete(string ...$arguments): ResultInterface;

    /** gh project field-list */
    public function projectFieldList(string ...$arguments): ResultInterface;

    /** gh project item-add */
    public function projectItemAdd(string ...$arguments): ResultInterface;

    /** gh project item-archive */
    public function projectItemArchive(string ...$arguments): ResultInterface;

    /** gh project item-create */
    public function projectItemCreate(string ...$arguments): ResultInterface;

    /** gh project item-delete */
    public function projectItemDelete(string ...$arguments): ResultInterface;

    /** gh project item-edit */
    public function projectItemEdit(string ...$arguments): ResultInterface;

    /** gh project item-list */
    public function projectItemList(string ...$arguments): ResultInterface;

    /** gh project link */
    public function projectLink(string ...$arguments): ResultInterface;

    /** gh project list */
    public function projectList(string ...$arguments): ResultInterface;

    /** gh project mark-template */
    public function projectMarkTemplate(string ...$arguments): ResultInterface;

    /** gh project unlink */
    public function projectUnlink(string ...$arguments): ResultInterface;

    /** gh project view */
    public function projectView(string ...$arguments): ResultInterface;

    /** gh release */
    public function release(string ...$arguments): ResultInterface;

    /** gh release create */
    public function releaseCreate(string ...$arguments): ResultInterface;

    /** gh release delete */
    public function releaseDelete(string ...$arguments): ResultInterface;

    /** gh release delete-asset */
    public function releaseDeleteAsset(string ...$arguments): ResultInterface;

    /** gh release download */
    public function releaseDownload(string ...$arguments): ResultInterface;

    /** gh release edit */
    public function releaseEdit(string ...$arguments): ResultInterface;

    /** gh release list */
    public function releaseList(string ...$arguments): ResultInterface;

    /** gh release upload */
    public function releaseUpload(string ...$arguments): ResultInterface;

    /** gh release verify */
    public function releaseVerify(string ...$arguments): ResultInterface;

    /** gh release verify-asset */
    public function releaseVerifyAsset(string ...$arguments): ResultInterface;

    /** gh repo */
    public function repo(string ...$arguments): ResultInterface;

    /** gh repo archive */
    public function repoArchive(string ...$arguments): ResultInterface;

    /** gh repo autolink */
    public function repoAutolink(string ...$arguments): ResultInterface;

    /** gh repo clone */
    public function repoClone(string ...$arguments): ResultInterface;

    /** gh repo create */
    public function repoCreate(string ...$arguments): ResultInterface;

    /** gh repo delete */
    public function repoDelete(string ...$arguments): ResultInterface;

    /** gh repo deploy-key */
    public function repoDeployKey(string ...$arguments): ResultInterface;

    /** gh repo edit */
    public function repoEdit(string ...$arguments): ResultInterface;

    /** gh repo fork */
    public function repoFork(string ...$arguments): ResultInterface;

    /** gh repo gitignore */
    public function repoGitignore(string ...$arguments): ResultInterface;

    /** gh repo license */
    public function repoLicense(string ...$arguments): ResultInterface;

    /** gh repo list */
    public function repoList(string ...$arguments): ResultInterface;

    /** gh repo rename */
    public function repoRename(string ...$arguments): ResultInterface;

    /** gh repo set-default */
    public function repoSetDefault(string ...$arguments): ResultInterface;

    /** gh repo sync */
    public function repoSync(string ...$arguments): ResultInterface;

    /** gh repo unarchive */
    public function repoUnarchive(string ...$arguments): ResultInterface;

    /** gh repo view */
    public function repoView(string ...$arguments): ResultInterface;

    /** gh ruleset */
    public function ruleset(string ...$arguments): ResultInterface;

    /** gh ruleset check */
    public function rulesetCheck(string ...$arguments): ResultInterface;

    /** gh ruleset list */
    public function rulesetList(string ...$arguments): ResultInterface;

    /** gh ruleset view */
    public function rulesetView(string ...$arguments): ResultInterface;

    /** gh run */
    public function run(string ...$arguments): ResultInterface;

    /** gh run cancel */
    public function runCancel(string ...$arguments): ResultInterface;

    /** gh run delete */
    public function runDelete(string ...$arguments): ResultInterface;

    /** gh run download */
    public function runDownload(string ...$arguments): ResultInterface;

    /** gh run list */
    public function runList(string ...$arguments): ResultInterface;

    /** gh run rerun */
    public function runRerun(string ...$arguments): ResultInterface;

    /** gh run view */
    public function runView(string ...$arguments): ResultInterface;

    /** gh run watch */
    public function runWatch(string ...$arguments): ResultInterface;

    /** gh search */
    public function search(string ...$arguments): ResultInterface;

    /** gh search code */
    public function searchCode(string ...$arguments): ResultInterface;

    /** gh search commits */
    public function searchCommits(string ...$arguments): ResultInterface;

    /** gh search issues */
    public function searchIssues(string ...$arguments): ResultInterface;

    /** gh search prs */
    public function searchPrs(string ...$arguments): ResultInterface;

    /** gh search repos */
    public function searchRepos(string ...$arguments): ResultInterface;

    /** gh secret */
    public function secret(string ...$arguments): ResultInterface;

    /** gh secret delete */
    public function secretDelete(string ...$arguments): ResultInterface;

    /** gh secret list */
    public function secretList(string ...$arguments): ResultInterface;

    /** gh secret set */
    public function secretSet(string ...$arguments): ResultInterface;

    /** gh ssh-key */
    public function sshKey(string ...$arguments): ResultInterface;

    /** gh ssh-key add */
    public function sshKeyAdd(string ...$arguments): ResultInterface;

    /** gh ssh-key delete */
    public function sshKeyDelete(string ...$arguments): ResultInterface;

    /** gh ssh-key list */
    public function sshKeyList(string ...$arguments): ResultInterface;

    /** gh status */
    public function status(string ...$arguments): ResultInterface;

    /** gh variable */
    public function variable(string ...$arguments): ResultInterface;

    /** gh variable delete */
    public function variableDelete(string ...$arguments): ResultInterface;

    /** gh variable get */
    public function variableGet(string ...$arguments): ResultInterface;

    /** gh variable list */
    public function variableList(string ...$arguments): ResultInterface;

    /** gh variable set */
    public function variableSet(string ...$arguments): ResultInterface;

    /** gh workflow */
    public function workflow(string ...$arguments): ResultInterface;

    /** gh workflow disable */
    public function workflowDisable(string ...$arguments): ResultInterface;

    /** gh workflow enable */
    public function workflowEnable(string ...$arguments): ResultInterface;

    /** gh workflow list */
    public function workflowList(string ...$arguments): ResultInterface;

    /** gh workflow run */
    public function workflowRun(string ...$arguments): ResultInterface;

    /** gh workflow view */
    public function workflowView(string ...$arguments): ResultInterface;
}
