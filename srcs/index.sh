#!/bin/bash

case $INDEX in
	"on")
		sed -i 's/batman/autoindex on;/g' /etc/nginx/sites-enabled/default
		service nginx start
		echo  "index mode on"
		;;
	"off")
		sed -i 's/batman/autoindex off;/g' /etc/nginx/sites-enabled/default
		service nginx start
		echo "index mode off"
		;;
	*)
		sed -i 's/batman/autoindex on;/g' /etc/nginx/sites-enabled/default
		service nginx start
		echo  "index mode on (auto)"
		;;
esac
