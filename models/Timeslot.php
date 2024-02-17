<?php
require_once __DIR__ . '/../helpers/Database.php';
class Timeslot
{

    private int $id_timeslot;
    private datetime $slot;
    //-----------------ID_TIMESLOT--------------
    public function getIdTimeslot(): int
    {
        return $this->id_timeslot;
    }
    public function setIdTimeslot(int $id_timeslot): void
    {
        $this->id_timeslot = $id_timeslot;
    }
    //-----------------ADRESS-------------------
    public function getSlot(): datetime
    {
        return $this->slot;
    }
    public function setSlot(datetime $slot)
    {
        $this->slot = $slot;
    }
    // Insert a new timeslot into the database
    public function insert(): void
    {
        $pdo = Database::connect();
        $sql = 'INSERT INTO timeslots (`slot`) 
        VALUES (:slot)';
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':slot', $this->slot);
        $sth->execute();
        $this->id_timeslot = $pdo->lastInsertId();
    }

    public static function getAll(): array
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM timeslots';
        $sth = $pdo->query($sql);
        $timeslots = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $timeslots;
    }
}
