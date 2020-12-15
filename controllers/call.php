<?php

namespace HereToHelp\Controller;

use HereToHelp\Helper;

class Call {
    function listCall() {
        Helper::render("general", "table", false, false, true);
    }

    function oneCall() {
        Helper::render(array("resident", "call"), array("one", "one"), false, false, true);
    }

    function editCall() {
        Helper::render(array("resident", "call"), array("one", "edit"), false, false, true);
    }
}