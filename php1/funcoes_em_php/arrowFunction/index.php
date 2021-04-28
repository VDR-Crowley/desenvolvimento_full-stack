<?php

echo "<heade>
        <title>Arrow function</title>
        <style>
          html {
            width: 100vw;
            height: 100vh;
            border: 1px solid red
            display: flex;
            aling-items: center;
          }

          h2 {
            color: #562793;
            flex: 1;
            animation: move 5s infinite;
          }

          @keyframes move {
            from { transform: rotate(-360deg)}
            to { transform: rotate(360deg)}
          }
        </style>
      </heade>";

$printName = fn(string $name, string $lastName) => $name." ".$lastName;
echo "<h2>{$printName("Vando", "Dos Reis")}</h2>";

?>