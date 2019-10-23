<?php

exec("nohup /usr/bin/php " . dirname(__FILE__) . "/wait_sample.php > /dev/null &");

sleep(5);

exec("nohup /usr/bin/php " . dirname(__FILE__) . "/wait_sample.php > /dev/null &");
