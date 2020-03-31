<?php

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {

    return array(

        'pdf' => array(
            'enabled' => true,
            'binary' => '"C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf"',
            'timeout' => false,
            'options' => array(),
            'env' => array(),
        ),
        'image' => array(
            'enabled' => true,
            'binary' => '"C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf"',
            'timeout' => false,
            'options' => array(),
            'env' => array(),
        ),

    );

} else {

    return array(

        'pdf' => array(
            'enabled' => true,
            'binary' => '/usr/local/bin/wkhtmltopdf-amd64',
            'timeout' => false,
            'options' => array(),
            'env' => array(),
        ),
        'image' => array(
            'enabled' => true,
            'binary' => '/usr/local/bin/wkhtmltoimage',
            'timeout' => false,
            'options' => array(),
            'env' => array(),
        ),

    );

}
