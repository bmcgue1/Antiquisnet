#!/bin/bash 
clear
echo "Mike's Auto Reload Script Is Running"
browser-sync start --server --files "css/*.css, *.html, views/*.html"
