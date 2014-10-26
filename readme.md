# Project Peripeteia (Peri)

[![Build Status](https://magnum.travis-ci.com/projectperi/peripeteia.svg?token=6BcpaX3WFV4g3ApyWWFr&branch=master)](https://magnum.travis-ci.com/projectperi/peripeteia)
[![Latest Unstable Version](http://img.shields.io/badge/Unstable-0.1.0-orange.svg)](https://github.com/bcarroll22/peripeteia)

## Introduction

Welcome to the Project Peri GitHub repository!! Hopefully you will enjoy all of the features GitHub has to offer, and adapt to using them quickly. Check back frequently for more reminders about how to utilize GitHub features to their fullest extent!

## Origins and Upstreams

First things first: the main repository is called the **upstream**. There are two branches in this repository, and these are the only two that will always exist on the upstream. These branches are named *develop* and *master*. 

Team members should never need work directly on the upstream. Github allows for us to *fork* a copy. (Be sure not to confuse forking and branching, they're very different). The benefit to this is that each person will have their own personal copy of the project to work on, including their very own git history. This also allows for a better development environment, since you can make changes on your fork without needing to worry about interfering with someone else's work.

## Fork Your Copy

First, log in to your account at www.github.com. Navigate to the Perepetia repo that has been shared with you. At the top right of the page, there is a gray button that says fork. Click that button! Congratulations, you now have your very own branch of Peri, complete with a develop and master branch! Now let's get it set up and working.

You'll need to get the project from Brandon before you do any syncing, pushing, pulling, fetching, merging, anything. This is because not everything will be synced to GitHub. But let's assume you've already gotten the folder. Name the folder, "peripeteia", and put it at C:\Users\<YourName>\Homestead\Projects.

## Next Steps

1. Open Command Prompt
2. "cd .\Homestead\"
3. "vagrant up"
4. Open PuTTY, and connect via SSH to Homestead
5. cd Sites/peripetia
6. Run these commands, one by one, filling in correct information:
```
git config --global user.name "Firstname Lastname"
git config --global user.email "youremail@whatever.blah"
git config --global http.proxy "http://<id_number>:<password>@wsa2-sn.pcci.edu:3128"
git config --global https.proxy "https://<id_number>:<password>@wsa2-sn.pcci.edu:3128"
git config --global http.sslverify false
git config --global https.sslverify false
git init
```

Now, go to GitHub's website, and go to your account settings. Add a new SSH key, and name it whatever you like. This is what is going to allow you to push changes to GitHub via Homestead. The value is:
```
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQC5ONn1I5VpwfDcnfUCBEw7NM+mzo2Bb5km17FxTaX+ULt3ior9EJrk0/iU8WegIuT5MMTEPu0n9oPQ7gBPUzNVPeXCuDNqrynaOmZT6qFpDXhOIF1KtiUnzv4I3BpBD9HkGS2fjH+0vNJcce6kCsDWsJEPna15nUygILMGYkBke0zy8WtH1ZzvAAVTtCZuhV43ZtR5hMymPT77sjNlNY+zIFtWT4pzG5EYlUGNJoBop+/fqGppFZvtlXEoI7yGBXx3xmqiXWPouqdsSUbCCeZJXPXKToePSY7+7hsG77VVLQHc/2Wfw3qcNPlKo2aPd6imcyTcxdqTpbLHKlgaYg6P Project Peri
```

Now that you've got that done, head back to your Homestead command prompt and run the following commands:

```
git remote add origin git@github.com:<yourusername>/peripeteia.git
git remote add upstream https://github.com/projectperi/peripeteia.git
git pull origin master
```

Congratulations! You now have your own copy that is synced with GitHub, and you've also set up a way that you can keep your code up to date with the upstream repo. Check that you've set this up correctly by running:
```
git remote -v
```

If you have 4 entries there, you've done it correctly! Now, you'll want to make sure you sync your code with the upstream code every time you start working. To do this, you'll run the following three commands:
```
git fetch upstream
git checkout develop
git merge upstream/develop
```

There you have it! Your code will now be up to date with the upstream repo. Now, you can switch back to your develop branch to continue development.

## Going Further

Now, if you want to work on a major feature (story) you may want to create a new branch in case you mess up. This is easy. From the command line, simply run:
```
git checkout -b whatever-you-want-to-name-the-branch
```

Note that this branch name should probably correspond to whatever the story is that you're working on in the branch. That will just make things easier.

Now then, let's say you get stuck on something while you're working on your story, and you're not quite sure how to continue. What should you do?

1. Make sure you push your changes to your origin using:
```
git add -A
git commit -m "a relevant message to let everyone know what you changed"
git push origin whatever-you-want-to-name-the-branch
```
2. Pull up the GitHub website, and navigate to the upstream repo.
3. Create a pull request on the develop branch. This will open up a discussion about your code, and allow for team review. This will also automate tests on Travis-CI, so everyone will know what parts of your code are failing and passing unit tests.
4. Once the team has helped fix the code, and agreed that the code can be merged into the upstream develop branch, it will be merged and readied for the next production release.

## Merge Conflicts

For the most part, because of the way that the structure is set up, and you have your own private fork of the code, *you most likely won't have to worry about merge conflicts*. Keep the following in mind to avoid any potential issues with conflicts..

1. Be sure to **always** commit all changes to your develop branch
2. Before you ever start working on the project, **always** run the following commands:
```
git fetch upstream
git checkout develop
git merge upstream/develop
```

3. **Be sure** you are interacting with the upstream develop branch. You shouldn't need to worry about anything in the upstream master, as that is simply our production releases.
4. Any merge conflicts when merging pull requests will not cause you any hassle, so there's no need to worry about that!

That's all for now, more sections will be added later for your benefit! Thanks for reading! Keep the team values in mind, consider yourself an artisan, and **enjoy doing whatever it is you're doing!**

## Happy coding, Peri-mates!
