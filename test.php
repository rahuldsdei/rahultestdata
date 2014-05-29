######################### Steps to create clone-commit-and-push file to git by linux terminal #########################

INSTALL GIT CLIENT:-
rahuld@isteam-HCL-Desktop:/$ cd home/
rahuld@isteam-HCL-Desktop:/home$ cd rahuld/
rahuld@isteam-HCL-Desktop:~$ git clone testgirdata
fatal: repository 'testgirdata' does not exist
rahuld@isteam-HCL-Desktop:~$ git clone testgitdata
fatal: repository 'testgitdata' does not exist
rahuld@isteam-HCL-Desktop:~$ git init
Reinitialized existing Git repository in /home/rahuld/.git/
rahuld@isteam-HCL-Desktop:~$ md testgitrepo
md: command not found
rahuld@isteam-HCL-Desktop:~$ mkdir testgitrepo
rahuld@isteam-HCL-Desktop:~$ git clone testgitrepo
fatal: repository 'testgitrepo' does not exist
rahuld@isteam-HCL-Desktop:~$ cd testgitrepo/
rahuld@isteam-HCL-Desktop:~/testgitrepo$ git clone testgitrepo
fatal: repository 'testgitrepo' does not exist
rahuld@isteam-HCL-Desktop:~/testgitrepo$ git clone testgitrepo
fatal: repository 'testgitrepo' does not exist
rahuld@isteam-HCL-Desktop:~/testgitrepo$ git clone https://github.com/rahuldsdei/rahultestdata
Cloning into 'rahultestdata'...
warning: You appear to have cloned an empty repository.
rahuld@isteam-HCL-Desktop:~/testgitrepo$ git add test.php
fatal: pathspec 'testgitrepo/test.php' did not match any files
rahuld@isteam-HCL-Desktop:~/testgitrepo$ cd rahultestdata/
rahuld@isteam-HCL-Desktop:~/testgitrepo/rahultestdata$ git add test.php
rahuld@isteam-HCL-Desktop:~/testgitrepo/rahultestdata$ git commit -m "first commit"
[master (root-commit) f212211] first commit
 0 files changed
 create mode 100644 test.php
rahuld@isteam-HCL-Desktop:~/testgitrepo/rahultestdata$ git push origin master
Username for 'https://github.com': rahuldsdei
Password for 'https://rahuldsdei@github.com':
To https://github.com/rahuldsdei/rahultestdata
 * [new branch]      master -> master
rahuld@isteam-HCL-Desktop:~/testgitrepo/rahultestdata$
