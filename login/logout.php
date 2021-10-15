<?php

require_once('sessao/controle.php');
session_destroy();
header('Location: login.html');