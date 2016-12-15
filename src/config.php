<?php

use lib\Config;

// DB Config
Config::write('db.host', 'localhost');
Config::write('db.port', '3306');
Config::write('db.basename', 'islim');
Config::write('db.user', 'root');
Config::write('db.password', 'root');

// Project Config
Config::write('path', 'http://localhost:1337/islim/src/');