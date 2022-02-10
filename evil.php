<?php
    echo "1337\n";
    echo pcntl_exec("/bin/bash", ["-c", "id"]);
?>
