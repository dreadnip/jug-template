#!/bin/bash
domain="html"
rsync -a output/* root@static:/var/www/$domain/
