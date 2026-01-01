# GitHub Cli Documentation

```php
use Ghostwriter\GitHubCli\GitHubCli;

$gh = GitHubCli::new();

// gh agent-task
$gh->agentTask('--help');

// gh agent-task create
$gh->agentTaskCreate('--help');

// gh agent-task list
$gh->agentTaskList('--help');

// gh agent-task view
$gh->agentTaskView('--help');

// gh alias
$gh->alias('--help');

// gh alias delete
$gh->aliasDelete('--help');

// gh alias import
$gh->aliasImport('--help');

// gh alias list
$gh->aliasList('--help');

// gh alias set
$gh->aliasSet('--help');

// gh api
$gh->api('--help');

// gh attestation
$gh->attestation('--help');

// gh attestation download
$gh->attestationDownload('--help');

// gh attestation trusted-root
$gh->attestationTrustedRoot('--help');

// gh attestation verify
$gh->attestationVerify('--help');

// gh auth
$gh->auth('--help');

// gh auth login
$gh->authLogin('--help');

// gh auth logout
$gh->authLogout('--help');

// gh auth refresh
$gh->authRefresh('--help');

// gh auth setup-git
$gh->authSetupGit('--help');

// gh auth status
$gh->authStatus('--help');

// gh auth switch
$gh->authSwitch('--help');

// gh auth token
$gh->authToken('--help');

// gh browse
$gh->browse('--help');

// gh cache
$gh->cache('--help');

// gh cache delete
$gh->cacheDelete('--help');

// gh cache list
$gh->cacheList('--help');

// gh codespace
$gh->codespace('--help');

// gh codespace code
$gh->codespaceCode('--help');

// gh codespace cp
$gh->codespaceCp('--help');

// gh codespace create
$gh->codespaceCreate('--help');

// gh codespace delete
$gh->codespaceDelete('--help');

// gh codespace edit
$gh->codespaceEdit('--help');

// gh codespace jupyter
$gh->codespaceJupyter('--help');

// gh codespace list
$gh->codespaceList('--help');

// gh codespace logs
$gh->codespaceLogs('--help');

// gh codespace ports
$gh->codespacePorts('--help');

// gh codespace rebuild
$gh->codespaceRebuild('--help');

// gh codespace ssh
$gh->codespaceSsh('--help');

// gh codespace stop
$gh->codespaceStop('--help');

// gh codespace view
$gh->codespaceView('--help');

// gh completion
$gh->completion('--help');

// gh config
$gh->config('--help');

// gh config clear-cache
$gh->configClearCache('--help');

// gh config get
$gh->configGet('--help');

// gh config list
$gh->configList('--help');

// gh config set
$gh->configSet('--help');

// gh
$gh->execute('--help');

// gh extension
$gh->extension('--help');

// gh extension browse
$gh->extensionBrowse('--help');

// gh extension create
$gh->extensionCreate('--help');

// gh extension exec
$gh->extensionExec('--help');

// gh extension install
$gh->extensionInstall('--help');

// gh extension list
$gh->extensionList('--help');

// gh extension remove
$gh->extensionRemove('--help');

// gh extension search
$gh->extensionSearch('--help');

// gh extension upgrade
$gh->extensionUpgrade('--help');

// gh gist
$gh->gist('--help');

// gh gist clone
$gh->gistClone('--help');

// gh gist create
$gh->gistCreate('--help');

// gh gist delete
$gh->gistDelete('--help');

// gh gist edit
$gh->gistEdit('--help');

// gh gist list
$gh->gistList('--help');

// gh gist rename
$gh->gistRename('--help');

// gh gist view
$gh->gistView('--help');

// gh gpg-key
$gh->gpgKey('--help');

// gh gpg-key add
$gh->gpgKeyAdd('--help');

// gh gpg-key delete
$gh->gpgKeyDelete('--help');

// gh gpg-key list
$gh->gpgKeyList('--help');

// gh help
$gh->help('--help');

// gh issue
$gh->issue('--help');

// gh issue close
$gh->issueClose('--help');

// gh issue comment
$gh->issueComment('--help');

// gh issue create
$gh->issueCreate('--help');

// gh issue delete
$gh->issueDelete('--help');

// gh issue develop
$gh->issueDevelop('--help');

// gh issue edit
$gh->issueEdit('--help');

// gh issue list
$gh->issueList('--help');

// gh issue lock
$gh->issueLock('--help');

// gh issue pin
$gh->issuePin('--help');

// gh issue reopen
$gh->issueReopen('--help');

// gh issue status
$gh->issueStatus('--help');

// gh issue transfer
$gh->issueTransfer('--help');

// gh issue unlock
$gh->issueUnlock('--help');

// gh issue unpin
$gh->issueUnpin('--help');

// gh issue view
$gh->issueView('--help');

// gh label
$gh->label('--help');

// gh label clone
$gh->labelClone('--help');

// gh label create
$gh->labelCreate('--help');

// gh label delete
$gh->labelDelete('--help');

// gh label edit
$gh->labelEdit('--help');

// gh label list
$gh->labelList('--help');

// gh org
$gh->org('--help');

// gh org list
$gh->orgList('--help');

// gh pr
$gh->pr('--help');

// gh pr checkout
$gh->prCheckout('--help');

// gh pr checks
$gh->prChecks('--help');

// gh pr close
$gh->prClose('--help');

// gh pr comment
$gh->prComment('--help');

// gh pr create
$gh->prCreate('--help');

// gh pr diff
$gh->prDiff('--help');

// gh pr edit
$gh->prEdit('--help');

// gh pr list
$gh->prList('--help');

// gh pr lock
$gh->prLock('--help');

// gh pr merge
$gh->prMerge('--help');

// gh pr ready
$gh->prReady('--help');

// gh pr reopen
$gh->prReopen('--help');

// gh pr revert
$gh->prRevert('--help');

// gh pr review
$gh->prReview('--help');

// gh pr status
$gh->prStatus('--help');

// gh pr unlock
$gh->prUnlock('--help');

// gh pr update-branch
$gh->prUpdateBranch('--help');

// gh pr view
$gh->prView('--help');

// gh preview
$gh->preview('--help');

// gh preview prompter
$gh->previewPrompter('--help');

// gh project
$gh->project('--help');

// gh project close
$gh->projectClose('--help');

// gh project copy
$gh->projectCopy('--help');

// gh project create
$gh->projectCreate('--help');

// gh project delete
$gh->projectDelete('--help');

// gh project edit
$gh->projectEdit('--help');

// gh project field-create
$gh->projectFieldCreate('--help');

// gh project field-delete
$gh->projectFieldDelete('--help');

// gh project field-list
$gh->projectFieldList('--help');

// gh project item-add
$gh->projectItemAdd('--help');

// gh project item-archive
$gh->projectItemArchive('--help');

// gh project item-create
$gh->projectItemCreate('--help');

// gh project item-delete
$gh->projectItemDelete('--help');

// gh project item-edit
$gh->projectItemEdit('--help');

// gh project item-list
$gh->projectItemList('--help');

// gh project link
$gh->projectLink('--help');

// gh project list
$gh->projectList('--help');

// gh project mark-template
$gh->projectMarkTemplate('--help');

// gh project unlink
$gh->projectUnlink('--help');

// gh project view
$gh->projectView('--help');

// gh release
$gh->release('--help');

// gh release create
$gh->releaseCreate('--help');

// gh release delete
$gh->releaseDelete('--help');

// gh release delete-asset
$gh->releaseDeleteAsset('--help');

// gh release download
$gh->releaseDownload('--help');

// gh release edit
$gh->releaseEdit('--help');

// gh release list
$gh->releaseList('--help');

// gh release upload
$gh->releaseUpload('--help');

// gh release verify
$gh->releaseVerify('--help');

// gh release verify-asset
$gh->releaseVerifyAsset('--help');

// gh repo
$gh->repo('--help');

// gh repo archive
$gh->repoArchive('--help');

// gh repo autolink
$gh->repoAutolink('--help');

// gh repo clone
$gh->repoClone('--help');

// gh repo create
$gh->repoCreate('--help');

// gh repo delete
$gh->repoDelete('--help');

// gh repo deploy-key
$gh->repoDeployKey('--help');

// gh repo edit
$gh->repoEdit('--help');

// gh repo fork
$gh->repoFork('--help');

// gh repo gitignore
$gh->repoGitignore('--help');

// gh repo license
$gh->repoLicense('--help');

// gh repo list
$gh->repoList('--help');

// gh repo rename
$gh->repoRename('--help');

// gh repo set-default
$gh->repoSetDefault('--help');

// gh repo sync
$gh->repoSync('--help');

// gh repo unarchive
$gh->repoUnarchive('--help');

// gh repo view
$gh->repoView('--help');

// gh ruleset
$gh->ruleset('--help');

// gh ruleset check
$gh->rulesetCheck('--help');

// gh ruleset list
$gh->rulesetList('--help');

// gh ruleset view
$gh->rulesetView('--help');

// gh run
$gh->run('--help');

// gh run cancel
$gh->runCancel('--help');

// gh run delete
$gh->runDelete('--help');

// gh run download
$gh->runDownload('--help');

// gh run list
$gh->runList('--help');

// gh run rerun
$gh->runRerun('--help');

// gh run view
$gh->runView('--help');

// gh run watch
$gh->runWatch('--help');

// gh search
$gh->search('--help');

// gh search code
$gh->searchCode('--help');

// gh search commits
$gh->searchCommits('--help');

// gh search issues
$gh->searchIssues('--help');

// gh search prs
$gh->searchPrs('--help');

// gh search repos
$gh->searchRepos('--help');

// gh secret
$gh->secret('--help');

// gh secret delete
$gh->secretDelete('--help');

// gh secret list
$gh->secretList('--help');

// gh secret set
$gh->secretSet('--help');

// gh ssh-key
$gh->sshKey('--help');

// gh ssh-key add
$gh->sshKeyAdd('--help');

// gh ssh-key delete
$gh->sshKeyDelete('--help');

// gh ssh-key list
$gh->sshKeyList('--help');

// gh status
$gh->status('--help');

// gh variable
$gh->variable('--help');

// gh variable delete
$gh->variableDelete('--help');

// gh variable get
$gh->variableGet('--help');

// gh variable list
$gh->variableList('--help');

// gh variable set
$gh->variableSet('--help');

// gh workflow
$gh->workflow('--help');

// gh workflow disable
$gh->workflowDisable('--help');

// gh workflow enable
$gh->workflowEnable('--help');

// gh workflow list
$gh->workflowList('--help');

// gh workflow run
$gh->workflowRun('--help');

// gh workflow view
$gh->workflowView('--help');
```
