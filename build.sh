#!/bin/bash
set -e
PATH=$PATH:/root/.local/bin

#read samples
mkdir samples

aws --quiet s3 cp s3://webix-packages/pivot/latest.txt ./
LATEST=`cat ./latest.txt`
aws --quiet s3 cp s3://webix-packages/pivot/pivot_${LATEST}_site.zip ./
unzip -q ./pivot_${LATEST}_site.zip 'samples/*' -d samples
mv samples/samples samples/61_pivot

aws --quiet s3 cp s3://webix-packages/kanban/latest.txt ./
LATEST=`cat ./latest.txt`
aws --quiet s3 cp s3://webix-packages/kanban/kanban_${LATEST}_site.zip ./
unzip -q ./kanban_${LATEST}_site.zip 'samples/*' -d samples
mv samples/samples samples/63_kanban

aws --quiet s3 cp s3://webix-packages/filemanager/latest.txt ./
LATEST=`cat ./latest.txt`
aws --quiet s3 cp s3://webix-packages/filemanager/filemanager_${LATEST}_site.zip ./
unzip -q ./filemanager_${LATEST}_site.zip 'samples/*' -d samples
mv samples/samples samples/64_file_manager

aws --quiet s3 cp s3://webix-packages/scheduler/latest.txt ./
LATEST=`cat ./latest.txt`
aws --quiet s3 cp s3://webix-packages/scheduler/scheduler_${LATEST}_site.zip ./
unzip -q ./scheduler_${LATEST}_site.zip 'samples/*' -d samples
mv samples/samples samples/62_scheduler

aws --quiet s3 cp s3://webix-packages/spreadsheet/latest.txt ./
LATEST=`cat ./latest.txt`
aws --quiet s3 cp s3://webix-packages/spreadsheet/spreadsheet_${LATEST}_site.zip ./
unzip -q ./spreadsheet_${LATEST}_site.zip 'samples/*' -d samples
mv samples/samples samples/65_spreadsheet

aws --quiet s3 cp s3://webix-packages/core/latest.txt ./
LATEST=`cat ./latest.txt`
aws --quiet s3 cp s3://webix-packages/core/webix_${LATEST}_site.zip ./
unzip -q ./webix_${LATEST}_site.zip 'samples/*'


echo '{"samples":"./samples/"}' > madoka.local.json

#generate static docs
php index.php reindex
php -d memory_limit=512M index.php export_html
cd export && zip -qr ../webix.docs.html.zip ./ && cd ..

php -d memory_limit=512M index.php sphinx
cd search && zip -qr ../webix.docs.xml.zip ./ && cd ..

#store generated docs
aws --quiet s3 cp ./webix.docs.html.zip s3://webix-packages/docs/docs_${LATEST}.html.zip
aws --quiet s3 cp ./webix.docs.xml.zip s3://webix-packages/docs/docs_${LATEST}.xml.zip
aws --quiet s3 cp ./latest.txt s3://webix-packages/docs/latest.txt