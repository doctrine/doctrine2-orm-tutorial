<?php
// bootstrap.php

require_once "entities/User.php";
require_once "entities/Product.php";
require_once "entities/Bug.php";

if (!class_exists("Doctrine\Common\Version", false)) {
    require_once "bootstrap_doctrine.php";
}

require_once "repositories/BugRepository.php";
