<?php
require_once __DIR__ . '/../helpers/Database.php';
class Client
{

    private ?int $id_user = NULL;
    private string $lastname;
    private string $firstname;
    private string $password;
    private string $email;
    private string $phonenumber = '';
    private ?string $address = '';
    private ?bool $is_admin = false;
    // private ?string $created_at = NULL;
    // private ?string $updated_at = NULL;
    // private ?string $archived_at = NULL;

    // public function __construct(
    //     int $id_user,
    //     string $lastname,
    //     string $firstname,
    //     string $password,
    //     string $email,
    //     string $phonenumber,
    //     string $adress,
    //     bool $is_admin,
    //     string $created_at,
    //     string $updated_at,
    //     string $archived_at,
    // ) {
    //     $this->id_user = $id_user;
    //     $this->lastname = $lastname;
    //     $this->firstname = $firstname;
    //     $this->password = $password;
    //     $this->email = $email;
    //     $this->phonenumber = $phonenumber;
    //     $this->adress = $adress;
    //     $this->is_admin = $is_admin;
    //     $this->created_at = $created_at;
    //     $this->updated_at = $updated_at;
    //     $this->archived_at = $archived_at;
    // }
    //--------------------ID_CLIENT---------user
    public function getIdUser(): ?int
    {
        return $this->id_user;
    }
    public function setIdUser(?int $id_user)
    {
        $this->id_user = $id_user;
    }
    //-----------------LASTNAME-------------------
    public function getLastName(): string
    {
        return $this->lastname;
    }
    public function setLastName(string $lastname)
    {
        $this->lastname = $lastname;
    }
    //-----------------FIRSTNAME-------------------
    public function getFirstName(): string
    {
        return $this->firstname;
    }
    public function setFirstName(string $firstname)
    {
        $this->firstname = $firstname;
    }
    //-----------------PASSWORD-------------------
    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    //-----------------IS_ADMIN-------------------
    public function getIsAdmin(): bool
    {
        return $this->is_admin;
    }

    public function setIsAdmin(bool $is_admin) 
    {
        $this->is_admin = $is_admin;
    }
    //-----------------EMAIL-------------------
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    //-----------------PHONE-------------------
    public function getPhoneNumber(): string
    {
        return $this->phonenumber;
    }
    public function setPhoneNumber(string $phonenumber)
    {
        $this->phonenumber = $phonenumber;
    }
    //-----------------ADRESS-------------------
    public function getAddress(): ?string
    {
        return $this->address;
    }
    public function setAddress(?string $address)
    {
        $this->address = $address;
    }

    // //---------------------CREATED_AT-------------- 
    // public function getCreatedAt(): ?string
    // {
    //     return $this->created_at;
    // }
    // public function setCreatedAt(?string $created_at)
    // {
    //     $this->created_at = $created_at;
    // }
    // //---------------------UPDATED_AT-------------- 
    // public function getUpdatedAt(): ?string
    // {
    //     return $this->updated_at;
    // }
    // public function setUpdatedAt(?string $updated_at)
    // {
    //     $this->updated_at = $updated_at;
    // }
    // //---------------------ARCHIVED_AT-------------- 
    // public function getArchivedAt(): ?string
    // {
    //     return $this->archived_at;
    // }
    // public function setArchivedAt(?string $archived_at)
    // {
    //     $this->archived_at = $archived_at;
    // }

    public function insert(): bool
    {
        $pdo = Database::connect();
        $sql = 'INSERT INTO `users` (`id_user`, `lastname`, `firstname`, `password`, `email`, `phonenumber`, `address`, `is_admin`) 
                VALUES (:id_user, :lastname, :firstname, :password, :email, :phonenumber, :address ,:is_admin);'; 
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id_user', $this->getIdUser(), PDO::PARAM_INT); 
        $sth->bindValue(':lastname', $this->getLastName());
        $sth->bindValue(':firstname', $this->getFirstName());
        $sth->bindValue(':password', $this->getPassword());
        $sth->bindValue(':email', $this->getEmail()); 
        $sth->bindValue(':phonenumber', $this->getPhoneNumber());
        $sth->bindValue(':address', $this->getAddress());
        $sth->bindValue(':is_admin', $this->getIsAdmin(), PDO::PARAM_BOOL);

        $result = $sth->execute();
        return (bool) $sth->rowCount(); 
    }

    public static function getAll(): array
    {
        $pdo = Database::connect();
        $sql = 'SELECT * from `users` ORDER by `lastname`';
        $sth = $pdo->query($sql);
        $datas = $sth->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }

    public static function delete($id_user): bool
    {
        $pdo = Database::connect();
        $sql = 'DELETE FROM `users` WHERE `id_user` = :id_user;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id_user', $id_user);
        $sth->execute();
        if ($sth->rowCount() <= 0) {
            return false;
        } else {
            return true;
        }
    }

    public function update()
    {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Requête mysql pour insérer des données
        $sql = 'UPDATE users 
                SET 
                    `lastname` = :lastname, 
                    `firstname` = :firstname,
                    `email` = :email,
                    `phonenumber` = :phonenumber,
                    `address` = :address
                WHERE `id_user` = :id_user';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id_user', $this->getIdUser(), PDO::PARAM_INT);
        $sth->bindValue(':lastname', $this->getLastname());
        $sth->bindValue(':firstname', $this->getFirstname());
        $sth->bindValue(':email', $this->getEmail());
        $sth->bindValue(':phonenumber', $this->getPhoneNumber());
        $sth->bindValue(':address', $this->getAddress());
        $result = $sth->execute();
        return $result;
    }
    public static function get(?int $id): object|false
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM `users` WHERE `id_user`=:id_user;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id_user', $id, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    public static function getByEmail(string $email)
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM `users` WHERE `email` = :email;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':email', $email);
        $sth->execute();
        if ($sth->rowCount() <= 0) {
            return false; // Aucun utilisateur trouvé
        } else {
            return $sth->fetch(PDO::FETCH_ASSOC); // Retourne toute les informations de l'utilisateur sous forme d'un tableau
        }
    }


}




