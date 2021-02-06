<?php

use Wulfheart\LaravelMailto\LaravelMailto;

function mailto($to): LaravelMailto
{
    $mailto = new LaravelMailto();
    if(isset($to)){
        $mailto->to($to);
    }
    return $mailto;
}