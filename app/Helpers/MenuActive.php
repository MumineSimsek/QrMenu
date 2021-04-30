<?php
 function menuactive($path){
    return (request()->segment(2) == $path) ? 'top-menus--active': '';
 }

