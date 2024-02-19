SELECT
  users.lastname, users.firstname, appointments.appointment_date, timeslots.slot
FROM
  users
  INNER JOIN appointments ON users.id_user = appointments.id_user
  INNER JOIN timeslots ON appointments.id_timeslot = timeslots.id_timeslot
  INNER JOIN appointments_services ON appointments.id_appointment = appointments_services.id_appointment
  INNER JOIN services ON appointments_services.id_service = services.id_service
ORDER BY
  appointments.appointment_date,
  timeslots.slot;
