<?php
/**
 * Created by PhpStorm.
 * User: intellisys
 * Date: 2019-03-14
 * Time: 12:42
 */

require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make());