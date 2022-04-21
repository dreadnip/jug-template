#!/bin/bash
domain="html"
rsync -a -P output/* root@static:/var/www/$domain/
