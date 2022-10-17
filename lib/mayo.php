<?php
function injectmayo($word) {
    header("Status: 301 Moved Permanently");
    header("Location:https://www.mayoclinic.org/search/search-results?q=".$word);
}
