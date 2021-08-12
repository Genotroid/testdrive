<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */
/* @var $userList array */

$this->breadcrumbs = array(
    'Users',
);

$this->menu = array(
    array('label' => 'Create User', 'url' => array('create')),
    array('label' => 'Manage User', 'url' => array('admin')),
);
?>


<h1>Users</h1>
<ul>
    <?php foreach ($userList as $user) { ?>
         <li><?=$user['username']?></li>
    <?php } ?>
</ul>