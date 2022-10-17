<?php
/**
 * Sturtz Search Version 2.0.*
 *
 * PHP version 7.4
 *
 * @category Sturtz Search
 * @package  Inject
 * @author   Darth Kilroy <darthkilroy@sturtz.io>
 * @link     https://sturtz.io
 */
foreach (glob("/home/sturtz/public_html/include/inject/lib/*.php") as $filename)
{
    include $filename;
}

?>
