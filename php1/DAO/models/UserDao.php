<?php
use Dao\models\User;

interface UserDao {
  public function add(User $user);
  public function findAll();
  public function findByEmail(string $email);
  public function findById(string $id);
  public function update(User $user);
  public function delete(string $id);
}

class UserDaoMySQL implements UserDao
{
  private $pdo;

  public function __construct(PDO $driver)
  {
    $this->pdo = $driver;
  }

  public function findById(string $id): User | bool
  {
    $sql = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
      $data = $sql->fetch();
      $user = new User();
      $user->setId($data['id']);
      $user->setName($data['name']);
      $user->setEmail($data['email']);

      return $user;
    } else return false;
  }

  public function add(User $user): User 
  {
    $sql = $this->pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
    $sql->bindValue(':name', $user->getName());
    $sql->bindValue(':email', $user->getEmail());
    $sql->bindParam(':password', $user->getPassword());
    $sql->execute();

    $user->setId($this->pdo->lastInsertId());
    return $user;
  }

  public function update(User $user): bool 
  {
    $sql = $this->pdo->prepare("UPDATE users SET name = :name, email = :email, id = :id");
    $sql->bindValue(':name', $user->getName());
    $sql->bindValue(':email', $user->getEmail());
    $sql->bindValue(':id', $user->getId());
    $sql->execute();

    return true;
  }

  function delete($id) 
  {
    $sql = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute(); 
  }

  public function findAll() 
  {
    $list = [];
    $sql = $this->pdo->query("SELECT * FROM users");
    if($sql->rowCount() > 0) {
      $data =  $sql->fetchAll(PDO::FETCH_ASSOC);
      foreach($data as $item) {
        $user = new User();
        $user->setId($item['id']);
        $user->setName($item['name']);
        $user->setEmail($item['email']);

        $list[] = $user;
      }
    }

    return $list;
  }

  public function findByEmail(string $email) 
  {
    $sql = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
    $sql->bindValue(':email',$email);
    $sql->execute();

    if($sql->rowCount() > 0) {
      $data = $sql->fetch();
      $user = new User();
      $user->setId($data['id']);
      $user->setName($data['name']);
      $user->setEmail($data['email']);

      return $user;
    } else return false;
  }
}