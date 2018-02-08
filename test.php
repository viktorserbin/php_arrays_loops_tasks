<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 05.02.2018
 * Time: 19:45
 */

$navigation = [
    ['uri' => 'index.html', 'title' => 'Home',],
    ['uri' => 'about.html', 'title' => 'About',],
    ['uri' => 'table.html', 'title' => 'Table',],
    ['uri' => 'float.html', 'title' => 'Float',],
    ['uri' => 'form.html', 'title' => 'Form',],
];

$sNav = '';
if (! empty($navigation)) {
    $sNav .= '<nav><ul>';
    foreach ($navigation as $ni) {
        $sNav .= '<li><a href="' . $ni['uri'] . '">' . $ni['title'] . '</a></li>';
    }
    $sNav .= '</ul></nav>';
}

echo $sNav;
