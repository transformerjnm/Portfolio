<?php 
function redirect_to($url){
    header('Location: '.urlencode($url));
}

?>