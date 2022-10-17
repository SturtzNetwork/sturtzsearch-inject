<?php
function injectddg($word) {
    header("Status: 301 Moved Permanently");
    header("Location:https://duckduckgo.com/?t=ffab&q=".$word);
}
