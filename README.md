
Drupal 7 Benchmark
---------------------

This is a tool for benchmarking hardware you're Drupal runs on. It's basically just a site with lot of preinstalled contrib modules, nodes and it pings your admin/config page. You have to install the site yourself (basic instructions below), log in with username - **benchmark** - and password - **benchmark**.

Installation
------------

First clone the site:
```sh
git clone https://github.com/hkirsman/drupal7_benchmark.git
```

Create new database. Here's how you would do it in console after logged in to mysql:
```sh
CREATE DATABASE d7_hardware_comp;
CREATE USER 'd7_hardware_comp'@'localhost' IDENTIFIED BY 'd7_hardware_comp';
GRANT ALL PRIVILEGES ON d7_hardware_comp.* TO 'd7_hardware_comp'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

Import the database. Password is d7_hardware_comp (as was defined above).
```sh
mysql -u d7_hardware_comp -p d7_hardware_comp < db.sql
```

Open the new site and log in from url /user with **benchmark** being both username and password. Go to url admin/benchmark - benchmark will start as soon as the page is loaded.
