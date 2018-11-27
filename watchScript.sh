#!/bin/bash 
clear
echo "Mike's Auto Reload Script Is Running"
cd /c/Dev/Antiquisnet/Antiquisnet;
browser-sync start --server --files "css/*.css, *.html, views/*.html"
