<?php
function isActive($path, $class = 'active')
{
    return (Request::is($path)) ? $class : '';
}