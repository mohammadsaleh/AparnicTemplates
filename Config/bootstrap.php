<?php
//debug(Configure::read());
Croogo::hookComponent('*', 'AparnicTemplates.AparnicTemplates');
Croogo::hookHelper('*', 'AparnicTemplates.AparnicTemplates');
CroogoNav::add('settings.children.aparnic_templates', array(
    'title' => __d('aparnic_templates', 'Aparnic Template'),
    'url' => array(
        'admin' => true,
        'plugin' => 'aparnic_templates',
        'controller' => 'templates',
        'action' => 'setting'
    ),
//    'icon' => array('beaker', 'larg'),
    'weight' => 1,
));
