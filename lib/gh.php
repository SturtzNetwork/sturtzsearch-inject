<?php
function injectgh($word) {
    header("Status: 301 Moved Permanently");
    header("Location:https://github.com/search?q=".$word);
}
