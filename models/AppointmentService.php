<?php
require_once __DIR__ . '/../helpers/Database.php';

class AppointmentService {

    private int $id_appointment;
    private int $id_service;
    // Getter pour id_appointment
    public function getIdAppointment(): int {
        return $this->id_appointment;
    }
    // Setter pour id_appointment
    public function setIdAppointment(int $id_appointment): void {
        $this->id_appointment = $id_appointment;
    }
    // Getter pour id_service
    public function getIdService(): int {
        return $this->id_service;
    }
    // Setter pour id_service
    public function setIdService(int $id_service): void {
        $this->id_service = $id_service;
    }

}
