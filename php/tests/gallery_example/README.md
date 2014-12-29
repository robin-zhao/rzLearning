Yet Another Gallery
==================================================

1) The script to convert thumbnail is thumbnailGenerator.sh

   - require imagemagick, could be installed under debian/ubuntu as "sudo apt-get install imagemagick"

   - install it as a cronjob so it can periodically check the image dir and convert thumbs.
        sudo crontab -e
        > */10 * * * * /bin/bash /home/robin/project/web/thumbnailGenerator.sh

2) To prepare the database and table defined in image.sql

   - mysql -uroot -ppassword
   - > CREATE DATABASE IF NOT EXISTS phptest_image;
   - > \q
   - mysql -uroot -ppassword phptest_image < image.sql

3) Use npm to install require js library. in this case jquery.

   - cd assets/js/
   - npm install
