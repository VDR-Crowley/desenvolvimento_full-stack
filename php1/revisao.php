
<form method="GET">
  <input type="text" name="email">
  <button>Button</button>
</form>

<?php

  $email = filter_input(INPUT_GET, 'email');

  $emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
  
  if($email) {
    echo $email;
  } else {
    echo "Email não é valido.";
  }