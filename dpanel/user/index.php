<?php
include_once '../../sys/inc/start.php';
$doc = new document(2);
$doc->title = __('Управление пользователями');
$doc->ret(__('Админка'), '../');
if(!$user->access('dpanel_user_dopusk')) $doc->access_denied(__('У Вас нет доступа!'));
$menu = new menu_ini('user_dpanel');
$menu->display();