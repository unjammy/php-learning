<?php

$config = require 'config.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/Item.php';
require 'core/functions.php';
require 'core/Quest.php';


return new QueryBuilder(
	Connection::make($config['database'])
);