<?php

namespace Dao\models;

interface UserModel {
  function getName(): string;
  function getEmail(): string;
  function getPassword(): string;
  function  __construct(string $nickname, string $email);
  function add(): void;
}

class User
{
  protected string $id;
  protected string $name;
  protected string $email;
  protected string $password;

  public function getId() {
    return $this->id;
  }

  public function setId(string $id): void {
    $this->id = $id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = ucwords(trim($name));
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): void
  {
    $this->password = strtolower(trim($email));
  }

  public function getPassword(): string
  {
    return $this->password;
  }

  public function setPassword(string $password): void
  {
    $this->password = trim($password);
  }
}
