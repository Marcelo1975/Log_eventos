<?php
require 'historico.class.php';
$log = new Historico();
$log->registrar("Entrou na página inicial...");

echo "Funcionando....";