<?php 

 echo '<pre>' . var_export($_SERVER,true) . '</pre>';
 echo '<h2>Get REQUEST</h2><pre>' . var_export($_GET,true) . '</pre>';
 echo '<h2>POST REQUEST</h2><pre>' . var_export($_POST,true) . '</pre>';
 echo '<h2>REQUEST</h2><pre>' . var_export($_REQUEST,true) . '</pre>';