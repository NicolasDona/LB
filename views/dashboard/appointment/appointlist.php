<h2 class="regular text-center">Liste des rendez-vous</h2>
<table class="list-style mt-5 mb-5 table-centered table-spaced">
    <thead>
        <tr class="regular">
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Date</th>
            <th scope="col">Heure</th>
            <th scope="col">Type Coiffure</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($appointments as $key => $appointment) { ?>
            <tr class="regular">
                <td><?= $appointment['id_user'] ?></td>
                <td><?= $appointment['lastname'] ?></td>
                <td><?= $appointment['firstname'] ?></td>
                <td><?= $appointment['appointment_date'] ?></td>
                <td><?= $appointment['timeslot'] ?></td>
                <td><?= $appointment['service_type'] ?></td>
                <td><a href="/controllers/dashboard/appointment/update-ctrl.php?id=<?= $appointment['id_appointment'] ?>"><i class="fa-solid fa-pen-to-square regular"></i></td>
                <td><a href="/controllers/dashboard/appointment/delete-ctrl.php?id=<?= $appointment['id_appointment'] ?>"><i class="fa-solid fa-trash-can btn regular"></td>
            </tr>
        <?php } ?>
    </tbody>
</table>