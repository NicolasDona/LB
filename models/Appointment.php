<?php
require_once __DIR__ . '/../helpers/Database.php';

class Appointment {
    private int $id_appointment;
    private string $appointment_date;
    private int $id_user;
    private int $id_timeslot;
//------------------ID_APPOINTEMENT-------------------
    public function getIdAppointment(): int {
        return $this->id_appointment;
    }
    public function setIdAppointment(int $id_appointment): void {
        $this->id_appointment = $id_appointment;
    }
//-------------------APPOINTEMENTDATE------------------
    public function getAppointmentDate(): string {
        return $this->appointment_date;
    }
    public function setAppointmentDate(string $appointment_date): void {
        $this->appointment_date = $appointment_date;
    }
//-----------------IDUSER------------------------------
    public function getIdUser(): int {
        return $this->id_user;
    }
    public function setIdUser(int $id_user): void {
        $this->id_user = $id_user;
    }
//----------------TIMESLOT------------------------------
    public function getIdTimeslot(): int {
        return $this->id_timeslot;
    }
    public function setIdTimeslot(int $id_timeslot): void {
        $this->id_timeslot = $id_timeslot;
    }
}
