<?php

namespace HereToHelp\Controller;

use HereToHelp\Helper;

class Journey {
    function start() {
        Helper::render("journey", "start", false, false, true);
    }

    function followup() {
        Helper::render(array("resident", "call"), array("one", "followup"), false, false, true);
    }

    function assign() {
        Helper::render("admin", "assign", false, false, true);
    }

    function singleAssign() {
        Helper::render("journey", "assign", false, false, true);
    }

    function reschedule() {
        Helper::render(array("resident", "call"), array("one", "reschedule"), false, false, true);
    }
}