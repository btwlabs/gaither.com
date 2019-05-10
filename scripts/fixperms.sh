#!/bin/bash

cd /media/efs/platform-test/acadia2-0916;
echo Changing owner of installation...;
sudo chown -R ec2-user:nginx ./;
echo "done";
echo Changing permissions on all directories...
find ./ -type d -exec chmod u=rwx,g=rx,o= '{}' \;
echo "done";
echo Changing permissions on all files...;
find ./ -type f -exec chmod u=rw,g=r,o= '{}' \;
echo "done";

echo Changing permissions on all directories in files folder;
cd /media/efs/platform-test/acadia2-0916/sites;
find ./ -type d -name files -exec chmod ug=rwx,o= '{}' \;
for d in ./*/files
do
   find $d -type d -exec chmod ug=rwx,o= '{}' \;
   find $d -type f -exec chmod ug=rw,o= '{}' \;
done
echo "done" ;
echo ALL DONE!;
