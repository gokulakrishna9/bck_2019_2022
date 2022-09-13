<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS bootstrap.min.css-->
    <?= link_tag('css/bootstrap.min.css') ?>
    <?= link_tag('css/jquery-ui.css') ?>
    <?= link_tag('css/theme.default.css') ?>
    <style>
        ul.ui-autocomplete {
            z-index: 1100;
        }

        .datepicker {
            z-index: 1600 !important;
            /* has to be larger than 1050 */
        }
    </style>
    <title><?= esc($title) ?></title>
</head>

<body>
    <?= $this->renderSection('page_grid') ?>
</body>

</html>

<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
