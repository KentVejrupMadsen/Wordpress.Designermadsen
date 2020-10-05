#!/bin/bash
chown www-data:www-data . -R
chmod 755 . -R

sass ./scss/style.scss ./style.css --style compressed