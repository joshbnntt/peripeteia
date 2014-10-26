# Project Peripeteia (Peri)

[![Build Status](https://magnum.travis-ci.com/bcarroll22/peripeteia.svg?token=6BcpaX3WFV4g3ApyWWFr&branch=master)](https://magnum.travis-ci.com/bcarroll22/peripeteia)
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
6. Run these commands, one by one, filling in correct bolded information:
```
git config --global user.name "**Firstname Lastname**"
git config --global user.email "**youremail@whatever.blah**"
git config --global http.proxy "http://**<id_number>**:**<password>**@wsa2-sn.pcci.edu:3128"
git config --global https.proxy "https://**<id_number>**:**<password>**@wsa2-sn.pcci.edu:3128"
git init
git remote add origin https://https://github.com/**<yourusername>**/peripeteia.git
git pull origin master
git remote add upstream https://github.com/projectperi/peripeteia.git
```

Congratulations! You now have your own copy that is synced with GitHub, and you've also set up a way that you can keep your code up to date with the upstream repo. Check that you've set this up correctly by running:
```
git remote -v
```

If you have 4 entries there, you've done it correctly! Now, you'll want to make sure you sync your code with the upstream code every time you start working. To do this, you'll run the following three commands:
```
git fetch upstream
git checkout master
git merge upstream/master
```

There you have it! Your code will now be up to date with the upstream repo.