<?php
/* Generated from ./assert_templates/trans.tpl */
function haanga_8d35b55be0c9b118eda2226b6b520297156d8d6d($vars, $return=FALSE, $blocks=array())
{
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo _("Translation")."\n".sprintf(_("Translation by %s"), "cesar")."\n".htmlentities(_($text))."\n".htmlentities(ucfirst(_($text)))."\n";
    if ($return == TRUE) {
        return ob_get_clean();
    }
}