# WebRoastDB
PHP Web based front end for TerminalRoastDB

WebRoastDB is a web based frontend for controlling a Fresh Roast SR700 coffee roaster.  It is built on top of [TerminalRoastDB](https://github.com/infinigrove/TerminalRoastDB) and is required for WebRoastDB to work.

# Setting Up A Development Environment

Requirements are Python3, MySQL, Apache, TerminalRoastDB and PHP.

Ubuntu Linux

    sudo apt-get install apache2 php php-mysql
    git clone https://github.com/infinigrove/WebRoastDB.git

You will need to make the Python Pyro4 module available for Apache.  This can be done by:

    sudo mkdir /var/www/.local
    sudo mkdir /var/www/.cache
    sudo chown www-data.www-data /var/www/.local
    sudo chown www-data.www-data /var/www/.cache
    sudo -H -u www-data pip3 install pyro4

You will have to place the contents of the WebRoastDB folder where it can be accessed by Apache.  I recommend placing it in the /var/www/html/ directory.  Then open your web browser to http://localhost/WebRoastDB/

# Configuration

See config.php

# Todo

- Interface for creating, maintaining and updating recipies
- Security (could setup .htaccess authentication if needed)
- Styling

Happy Roasting :)
