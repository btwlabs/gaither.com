#!/bin/bash

cd /media/efs/webroot;

echo Changing owner of installation...;
sudo chown -R -h ec2-user:nginx ./;
echo "done";

echo Changing permissions on all directories...;
find ./ -type d -exec chmod u=rwx,g=rx,o= '{}' \;
echo "done";


echo Changing permissions on all files...;
find ./ -type f -exec chmod u=rw,g=r,o= '{}' \;
echo "done" ;

echo Changing permissions on all directories in the files dir...;
find ./sites/gaither.com/files/ -type d -exec chmod u=rwx,g=rwx,o= '{}' \;
echo "done" ;

echo ALL DONE!;
