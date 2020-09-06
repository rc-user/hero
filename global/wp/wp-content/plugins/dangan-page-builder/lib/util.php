<?php

namespace dcp\lpb;

function is_uridas()
{

    // echo get_template();
    if ('uridas' == get_template()) {
        return true;
    } else {
        return false;
    }
}


function is_lionmedia()
{

    // echo get_template();
    if ('lionmedia' == get_template() || 'lionmedia-child' == get_template()) {
        return true;
    } else {
        return false;
    }
}
