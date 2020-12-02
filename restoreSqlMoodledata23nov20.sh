sudo apt-get install zip unzip
cd ~
sudo unzip eduas_moodledata_23nov2020.zip -d /
sudo rm /var/www/html/index.html
sudo cp -a ~/eduas2/eduas_index_v2 /var/www/html
