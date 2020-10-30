#!/usr/bin/env php
<?php
namespace zmtool\jsonrpc;

require "../autoload.php";

echo "> test start;\r\n";

(new Server())->run();
var_dump(\zmtool\Str::base64En("aaa"));

echo "> test end;\r\n";
