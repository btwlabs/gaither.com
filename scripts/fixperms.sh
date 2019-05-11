#!/bin/bash

cd /media/efs/platforms/acadia2-0916;
echo Changing owner of installation...;
sudo chown -R ec2-user:nginx ./;
echo "done";
echo Changing permissions on all directories...
find ./ -type d -exec chmod u=rwx,g=rx,o= '{}' \;
echo "done";
echo Changing permissions on all files...;
find ./ -type f -exec chmod u=rw,g=r,o= '{}' \;
echo "done" ;
echo ALL DONE!;
