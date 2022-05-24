<?php
SESSION_START();

$_SESSION  = array();

SESSION_DESTROY();

header("Location: index.php?login=login");
exit();