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


-- Lister les rendez-vous
  SELECT
  `users.lastname`, `users.firstname`, `appointments.appointment_date`, `timeslots.slot`, `services.type`
FROM
  users
  INNER JOIN appointments ON appointments.id_user = users.id_user
  INNER JOIN timeslots ON appointments.id_timeslot = timeslots.id_timeslot
  INNER JOIN appointments_services ON appointments_services.id_appointment = appointments.id_appointment
  INNER JOIN appointments_services ON appointments_services.id_service = services.id_service
  INNER JOIN services ON services.id_service = appointments_services.id_service
ORDER BY
  appointments.appointment_date,
  timeslots.slot;


  SELECT
  `users.lastname`, `users.firstname`, `appointments.appointment_date`, `timeslots.slot`, `services.type`
FROM
  appointments
  INNER JOIN users ON appointments.id_user = users.id_user
  INNER JOIN timeslots ON appointments.id_timeslot = timeslots.id_timeslot
  INNER JOIN appointments_services AS appointment ON appointments_services.id_appointment = appointments.id_appointment
  INNER JOIN appointments_services AS service ON appointments_services.id_service = services.id_service
  INNER JOIN services ON services.id_service = appointments_services.id_service
ORDER BY
  appointments.appointment_date,
  timeslots.slot;

-- requête finale
  SELECT
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
  JOIN  `services` ON `appointments_services`.`id_service` = `services`.`id_service`


    -- `appointments`.`id_appointment`




