<?php

#####################################################################
#
# ����������. (c) 2005 Vista
#
#####################################################################


require_once 'library/common.php';

session_unset();
session_destroy();

Redirect('index.php');

?>
