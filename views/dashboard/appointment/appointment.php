<h2 class="regular text-center">Liste des rendez-vous</h2>
<table class="list-style mt-5 mb-5 table-centered table-spaced">
    <thead>
        <tr class="regular">
            <th scope="col me5">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Date</th>
            <th scope="col">Heure</th>
            <th scope="col">depuis le</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($appointments as $key => $appointment) { ?>
        <tr class="regular">
            <td><?= $appointment['id_user']?></td>
            <td><?= $appointment ?></td>
            <td><?= $appointment ?></td>
            <td><?= $appointment['appointment_date']?></td>
            <td><?= $appointment ?></td>
            <td><?= $appointment ?></td>
            <td><a href="/controllers/dashboard/users/update-ctrl.php?id=<?= $user->id_user ?>"><i class="fa-solid fa-pen-to-square regular"></i></td>
            <td><a href="/controllers/dashboard/users/delete-ctrl.php?id=<?= $user->id_user ?>"><i class="fa-solid fa-trash-can btn regular"></td>
        </tr>
        <?php } ?>
    </tbody>
</table>