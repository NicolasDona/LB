<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Adresse</th>
            <th scope="col">N° de téléphone</th>
            <th scope="col">depuis le</th>
        </tr>
    </thead>
    <?php foreach ($users as $key => $user) { ?>
    <tbody>
        <tr>
            <th></th>
            <td><?= $client->lastname ?></td>
            <td><?= $client->firstanme ?></td>
            <td><?= $client->address ?></td>
            <td><?= $client->getPhoneNumber ?></td>
            <td></td>
        </tr>
    </tbody>
</table>
<?php } ?>