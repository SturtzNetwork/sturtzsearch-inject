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
 * Redirect `_gh $word` to Github search
 *
 * @param string $word   The query entered
 *
 * @return void
 */
function injectgh($word) {
    header("Status: 301 Moved Permanently");
    header("Location:https://github.com/search?q=".$word);
}
