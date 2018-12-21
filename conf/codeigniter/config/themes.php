<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['bootstrap']=array(
    'index'=>'bootstrap/index',
    'global'=>array('head','foot','navbar','layout','append_js','append_css','app_name'),
    'app_name'=>'Brand',
    'append_js'=>array(
        '//cdn.staticfile.org/jquery/3.2.1/jquery.min.js',
        '//cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js'
    ),
    'append_css'=>array('//cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css'),
    'welcome/index'=>array(
        'page_content'=>array('welcome/index')
    ),
    'welcome/login'=>array(
        'page_content'=>array('welcome/login'),
        'append_js'=>array('test.js','test2.js')
    )
);