<?php
require_once __DIR__ . '/../helpers/Database.php';

class Service {
    private ?int $id_service = NULL;
    private string $type;
    private ?string $picture;
    private int $price;
//--------------ID_Service----------------------------
    public function getIdService(): ?int {
        return $this->id_service;
    }
    public function setIdService(?int $id_service): void {
        $this->id_service = $id_service;
    }
//---------------TYPE----------------------------------
    public function getType(): string {
        return $this->type;
    }
    public function setType(string $type): void {
        $this->type = $type;
    }
//---------------PICTURES-------------------------------
    public function getPicture(): string {
        return $this->picture;
    }
    public function setPicture(string $picture): void {
        $this->picture = $picture;
    }
//----------------PRICE--------------------------------
    public function getPrice(): int {
        return $this->price;
    }
    public function setPrice(int $price): void {
        $this->price = $price;
    }
    public function insert(): void {
        $pdo = Database::connect();
        $sql = 'INSERT INTO services (`type`, `picture`, `price`)
        VALUES (:type, :picture, :price);';
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':type', $this->type);
        $sth->bindParam(':picture', $this->picture);
        $sth->bindParam(':price', $this->price);
        $sth->execute();
        $this->id_service = $pdo->lastInsertId(); // Récupère l'ID du service inséré
    }
        // Récupère tous les services de la base de données
        public static function getAll(): array {
            $pdo = Database::connect();
            $sql = 'SELECT * FROM services';
            $sth = $pdo->query($sql);
            $services = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $services;
        }
}
