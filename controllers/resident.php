<?php

namespace HereToHelp\Controller;

use HereToHelp\Helper;

class Resident {
    function oneResident() {
        Helper::render(array("resident", "resident"), array("one", "profile"), false, false, true);
    }

    function editResident() {
        Helper::render(array("resident", "resident"), array("one", "edit"), false, false, true);
    }
}