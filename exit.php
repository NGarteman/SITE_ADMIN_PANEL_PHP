<?php
setcookie('user', $user['name'] time() - 3600, "/");
Header('location:/');
?>