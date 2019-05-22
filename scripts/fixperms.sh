#!/bin/bash

cd /media/efs/webroot;

echo Changing owner of installation...;
sudo chown -R -h ec2-user:nginx ./;
echo "done";

echo Changing permissions on all directories...;
find ./ -type d -exec chmod u=rx,g=rx,rx= '{}' \;
echo "done";


echo Changing permissions on all files...;
find ./ -type f -exec chmod u=x,g=x,x= '{}' \;
echo "done" ;

echo ALL DONE!;
