<?php
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/strip_whitespace.tpl */
function haanga_d7c4d5b38d3a7e0818e446612beff5c975ed8985($vars, $return=FALSE, $blocks=array())
{
    global $test_global;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo htmlentities($test_global['b']).' '.htmlentities($test_global['b']).' <b> Texto laargo </b> <pre>
Este es un texto 

con
        espacios

</pre> Another text ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}