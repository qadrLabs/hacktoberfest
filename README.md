# hacktoberfest

## Getting Started:

- Fork this repo (button on top)
- Clone it on your local machine

```
git clone https://github.com/[your-username]/hacktoberfest.git
```

- Navigate to the project directory.

```
cd hacktoberfest
```

- Create a new branch

```
git checkout -b my-new-branch
```

Start contributing, then run command:

```
git add .
```

- Commit your changes.

```markdown
git commit -m "Relevant message"
```

- Then push

```markdown
git push origin my-new-branch
```

- Create a new pull request from your forked repository

## Syncing your fork

1. **Adding the upstream repository**
   ```bash
   git remote add upstream https://github.com/qadrLabs/hacktoberfest.git
   ```
   This command adds a new remote named `upstream`, which points to the original repository (in this case, the `hacktoberfest` repository on `qadrLabs`). It’s important to add this reference so that you can pull updates from the original project into your fork.

2. **Verifying remote repositories**
   ```bash
   git remote -v
   ```
   This command lists all the remote connections configured for your local repository. It’s useful to verify that both `origin` (your fork) and `upstream` (the original repository) are set up correctly, allowing you to pull and push changes accordingly.

3. **Merging updates from upstream**
   ```bash
   git merge upstream/main
   ```
   This command merges the latest changes from the `main` branch of the upstream repository (the original repository) into your local `main` branch. This step ensures your local branch stays up to date with any new changes made to the original project. Make sure you're on your `main` branch by running `git checkout main` before merging.

4. **Pushing updates to your fork**
   ```bash
   git push origin main
   ```
   After merging the changes from the upstream repository, this command pushes the updated `main` branch to your fork on GitHub (referred to as `origin`). This makes sure that your fork is synchronized with both your local repository and the upstream repository.

By following these steps, you ensure that your fork stays in sync with the latest updates from the original project and that those changes are reflected on your GitHub fork.
