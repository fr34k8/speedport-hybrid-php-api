<?php
require_once('config.php');
print_r($sp->getData('webdav'));
$sp->logout();