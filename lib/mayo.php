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

 /**
 * Redirect `_mayo $word` to Mayo Clinic search
 *
 * @param string $word   The query entered
 *
 * @return void
 */
function injectmayo($word) {
    header("Status: 301 Moved Permanently");
    header("Location:https://www.mayoclinic.org/search/search-results?q=".$word);
}
