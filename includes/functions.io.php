<?php

function msgBox($message, $type = 'error') {

    $class = 'danger';
    $title = 'Oops';
    switch ($type) {
        case 'ok':
        case 'success':
            $class = 'success';
            $title = 'Welcome';
            break;
        case 'info':
        case 'tip':
            $class = 'info';
            $title = 'Heads Up';
            break;
        case 'warning':
        case 'alert':
            $class = 'warning';
            $title = 'Warning';
            break;
        case 'wrong':
        case 'error':
            $class = 'danger';
            $title = 'wrong';
        default :
            break;
    }
    ?>
    <div class="alert alert-<?php echo $class; ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><?php echo $title; ?>!</strong> <?php echo $message; ?>
    </div>

    <?php
}
