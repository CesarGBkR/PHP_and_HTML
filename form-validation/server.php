<?php
echo "<pre>";
if (isset($_POST["name"]) && !empty($_POST["name"])){
    echo "Hi ".$_POST["name"]."!";
}else {
    echo "Not valid values";
}
echo "</pre>";