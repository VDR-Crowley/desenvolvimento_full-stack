<?php
spl_autoload_register(function (string $nameCompletClass) {
  echo $nameCompletClass . PHP_EOL;
  $directory = str_replace('Dao', '.', $nameCompletClass);
  $directory = str_replace('\\', DIRECTORY_SEPARATOR, $directory);
  $directory .= '.php';

  echo $directory . PHP_EOL;

  if(file_exists($directory)) {
    require_once $directory;
  }
});