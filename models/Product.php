<?php
class Product
{
    private ?int $id_product = NULL;
    private string $name;
    private string $description;
    private ?int $stock;
    private string $promostick;
    private ?int $price;
    private ?string $picture = '';
    private ?bool $is_admin = false;

    // ID_PRODUCT
    public function getIdProduct(): ?int
    {
        return $this->id_product;
    }
    
    public function setIdProduct(?int $id_product): void
    {
        $this->id_product = $id_product;
    }

    // NAME
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // DESCRIPTION
    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    // STOCK
    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): void
    {
        $this->stock = $stock;
    }

    // PROMOSTICK
    public function getPromostick(): string
    {
        return $this->promostick;
    }

    public function setPromostick(string $promostick): void
    {
        $this->promostick = $promostick;
    }

    // PRICE
    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    // PICTURE
    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): void
    {
        $this->picture = $picture;
    }

    // IS_ADMIN
    public function getIsAdmin(): ?bool
    {
        return $this->is_admin;
    }

    public function setIsAdmin(?bool $is_admin): void
    {
        $this->is_admin = $is_admin;
    }

    public function insert(): bool
    {
        $pdo = Database::connect();
        $sql = 'INSERT INTO `users` (`id_product`, `name`, `description`, `stock`, `promostick`, `price`, `picture`, `is_admin`) 
                VALUES (:id_product, :name, :description, :stock, :promostick, :price, :picture ,:is_admin);'; 
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id_product', $this->getIdProduct(), PDO::PARAM_INT); 
        $sth->bindValue(':name', $this->getName());
        $sth->bindValue(':description', $this->getDescription());
        $sth->bindValue(':stock', $this->getStock(), PDO::PARAM_INT);
        $sth->bindValue(':promostick', $this->getPromostick()); 
        $sth->bindValue(':price', $this->getPrice(), PDO::PARAM_INT);
        $sth->bindValue(':picture', $this->getPicture());
        $sth->bindValue(':is_admin', $this->getIsAdmin(), PDO::PARAM_BOOL);

        $result = $sth->execute();
        return (bool) $sth->rowCount(); 
    }

    
}



