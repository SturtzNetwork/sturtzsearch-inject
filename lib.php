<?php
foreach (glob("/home/sturtz/public_html/include/inject/lib/*.php") as $filename)
{
    include $filename;
//    echo $filename;
}

?>
