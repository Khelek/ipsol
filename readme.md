sudo apt-get install php5 php5-json php5-gd php5-sqlite curl libcurl3 libcurl3-dev php5-curl php5-common php-xml-parser php5-mcrypt mcrypt
sudo php5enmod mcrypt
sudo service apache2 restart

install composer

composer global require "laravel/installer=~1.1"
composer update

php artisan migrate
php artisan migrate --package=rtconner/laravel-tagging
php artisan migrate --package="terbium/db-config"

какой то chmod на app/storage, 755 чтоли
