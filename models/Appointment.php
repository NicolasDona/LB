<?php
require_once __DIR__ . '/../helpers/Database.php';

class Appointment
{
    private ?int $id_appointment;
    private string $appointment_date;
    private int $id_user;
    private int $id_timeslot;
    //------------------ID_APPOINTEMENT-------------------
    public function getIdAppointment(): int
    {
        return $this->id_appointment;
    }
    public function setIdAppointment(int $id_appointment): void
    {
        $this->id_appointment = $id_appointment;
    }
    //-------------------APPOINTEMENTDATE------------------
    public function getAppointmentDate(): string
    {
        return $this->appointment_date;
    }
    public function setAppointmentDate(string $appointment_date): void
    {
        $this->appointment_date = $appointment_date;
    }
    //-----------------IDUSER------------------------------
    public function getIdUser(): int
    {
        return $this->id_user;
    }
    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }
    //----------------TIMESLOT------------------------------
    public function getIdTimeslot(): int
    {
        return $this->id_timeslot;
    }
    public function setIdTimeslot(int $id_timeslot): void
    {
        $this->id_timeslot = $id_timeslot;
    }
    public function insert($service): void
    {
        $pdo = Database::connect();
        try {
            $pdo->beginTransaction();
            $sql = 'INSERT INTO appointments (`appointment_date`, `id_user`, `id_timeslot`)
            VALUES (:appointment_date, :id_user, :id_timeslot);';
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':appointment_date', $this->appointment_date);
            $sth->bindValue(':id_user', $this->id_user);
            $sth->bindValue(':id_timeslot', $this->id_timeslot);
            $sth->execute();
            $app_id = $pdo->lastInsertId();
           
           $sql2 = 'INSERT INTO `appointments_services` (`id_appointment`, `id_service`)
            VALUES (:id_appointment, :id_service);';
            $sth = $pdo->prepare($sql2);
            $sth->bindValue(':id_appointment', $app_id);
            $sth->bindValue(':id_service', $service);
            $sth->execute();
            $pdo->commit();
        } catch (\Throwable $th) {
            //throw $th;
            $pdo->rollback();
        }
    }
    public function update($service): void
    {
        $pdo = Database::connect();
        try {
            $pdo->beginTransaction();

            $sql = 'UPDATE appointments
            SET 
                `appointment_date` = :appointment_date, 
                `id_timeslot` = :id_timeslot
            WHERE `id_appointment` = :id_appointment;';
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':id_appointment', $this->id_appointment);
            $sth->bindValue(':appointment_date', $this->appointment_date);
            $sth->bindValue(':id_timeslot', $this->id_timeslot);
            $sth->execute();

            $sql2 = 'UPDATE appointments_services
            SET 
                `id_service` = :id_service
                WHERE `id_appointment` = :id_appointment
                ;';
            $sth = $pdo->prepare($sql2);
            $sth->bindValue(':id_service', $service);
            $sth->bindValue(':id_appointment', $this->id_appointment);
            $sth->execute();
            $pdo->commit();
        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            $pdo->rollback();
        }
    }

    public static function getAll(): array
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM appointments;';
        $sth = $pdo->query($sql);
        $appointments = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $appointments;
    }
    public static function getAllAppointment(): array
    {
        $pdo = Database::connect();
        $sql = '  SELECT
        -- users
        `users`.`id_user`,
        `users`.`lastname` AS lastname, 
        `users`.`firstname`AS firstname,

        -- appointments
        `appointments`.`appointment_date` AS appointment_date,
        `appointments`.`id_appointment` AS id_appointment,
        -- timeslot
        `timeslots`.`slot` AS timeslot,
        -- service
        `services`.`type` AS service_type
        FROM 
        `appointments`
        JOIN `users` ON `appointments`.`id_user` = `users`.`id_user`
        JOIN `timeslots` ON `appointments`.`id_timeslot` = `timeslots`.`id_timeslot`
        JOIN  `appointments_services` ON `appointments_services`.`id_appointment` = `appointments`.`id_appointment`
        JOIN  `services` ON `appointments_services`.`id_service` = `services`.`id_service`;';
        $sth = $pdo->query($sql);
        $appointments = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $appointments;
    }
    public function getOneAppointment() {
        $pdo = Database::connect();
        $sql = 'SELECT
        -- appointments
        `appointments`.`appointment_date` AS appointment_date,
        -- timeslot
        `timeslots`.`slot` AS timeslot,
        -- service
        `services`.`type` AS service_type
        FROM 
        `appointments`
        JOIN `timeslots` ON `appointments`.`id_timeslot` = `timeslots`.`id_timeslot`
        JOIN  `appointments_services` ON `appointments_services`.`id_appointment` = `appointments`.`id_appointment`
        JOIN  `services` ON `appointments_services`.`id_service` = `services`.`id_service`
        WHERE `appointments`.`id_appointment` = :id_appointment;';
        
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id_appointment', $this->getIdAppointment());
        $sth->execute();
        $appointments = $sth->fetch(PDO::FETCH_OBJ);
        return $appointments;

    }
}
