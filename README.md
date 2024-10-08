# hacktoberfest

This repo is designed to make it easy for first-time contributors to navigate the process of contributing to open-source projects. Don't worry if you're new to this—every contribution is valuable, and Hacktoberfest is the perfect time to get involved and start learning!

## Getting Started with Contributing

1. **Fork this repo (button on top)**  
   First, you’ll want to create a personal copy of this repository. You can do this by clicking the "Fork" button located at the top of this page. This will create a fork (a copy) of this project under your GitHub account.

2. **Clone it on your local machine**  
   Next, you’ll need to get the repository on your local machine so you can start making changes. You can clone the repository with this command:
   ```bash
   git clone https://github.com/[your-username]/hacktoberfest.git
   ```
   Replace `[your-username]` with your actual GitHub username.

3. **Navigate to the project directory**  
   After cloning, you’ll move into the project directory using:
   ```bash
   cd hacktoberfest
   ```
   This command changes your working directory to the project folder on your local machine.

4. **Create a new branch**  
   It’s always a good practice to create a new branch when making changes. This keeps your work separate from the main codebase and allows for easier collaboration. To create a new branch, use:
   ```bash
   git checkout -b my-new-branch
   ```
   Here, `my-new-branch` can be any name you choose. This command creates and switches you to a new branch.

5. **Start contributing**  
   Now you’re ready to make your changes! Whether it's fixing a bug, adding a feature, or improving documentation, make your contributions on your newly created branch.

6. **Stage your changes**  
   Once you’ve made your changes, you need to stage them so Git knows which files to include in your next commit:
   ```bash
   git add .
   ```
   This command stages all the changes you’ve made for the next commit.

7. **Commit your changes**  
   After staging, you’ll want to create a commit, which is a snapshot of your changes. Be sure to write a relevant message that describes what you’ve done:
   ```bash
   git commit -m "Relevant message"
   ```
   Your commit message should be brief but descriptive, so others can understand the purpose of the changes.

8. **Push your changes to GitHub**  
   Now it’s time to send your changes to GitHub. You’ll do this by pushing your new branch to your forked repository:
   ```bash
   git push origin my-new-branch
   ```
   This uploads your local branch to GitHub so it can be reviewed by others.

9. **Create a new pull request**  
   Finally, go back to GitHub and create a pull request (PR) from your forked repository. A pull request is a request to merge your changes into the original project. The project maintainers will review your changes, provide feedback, and possibly merge them into the main project.


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
