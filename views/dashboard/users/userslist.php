<h1 class="font-title fw-bold text-gold text-center">DASHBOARD</h1>
<h2 class="regular">Liste des inscrits</h2>
<table class="list-style mt-5 mb-5 table-centered table-spaced">
    <thead>
        <tr class="regular">
            <th scope="col me5">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Adresse</th>
            <th scope="col">N° de téléphone</th>
            <th scope="col">depuis le</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $user) { ?>
        <tr class="regular">
            <td><?= $user->id_user?></td>
            <td><?= $user->lastname ?></td>
            <td><?= $user->firstname ?></td>
            <td><?= $user->address ?></td>
            <td><?= $user->phonenumber ?></td>
            <td><?= $user->created_at ?></td>
            <td><a href="/controllers/dashboard/users/update-ctrl.php?id=<?= $user->id_user ?>"><i class="fa-solid fa-pen-to-square regular"></i></td>
            <td><a href="/controllers/dashboard/users/delete-ctrl.php?id=<?= $user->id_user ?>"><i class="fa-solid fa-trash-can btn regular"></td>
        </tr>
        <?php } ?>
    </tbody>
</table>