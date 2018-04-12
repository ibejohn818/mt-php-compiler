<?php

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/lib/cli-tools.php';

# get the ssh password

$s = new \Aws\Sdk(['version'=>'latest']);
print_r($s);
define(SSH_PASSWD, ask("SSH Password to Rackspace"));

echo SSH_PASSWD;
