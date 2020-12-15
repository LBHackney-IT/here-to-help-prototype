<?php

include("helper.php");

new HereToHelp\Helper(substr(current(explode("?", $_SERVER['REQUEST_URI'])), 1));