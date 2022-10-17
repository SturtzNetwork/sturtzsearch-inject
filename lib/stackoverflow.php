<?php
function injectstack($word) {
    header("Status: 301 Moved Permanently");
    header("Location:https://stackoverflow.com/search?q=".$word);
}
