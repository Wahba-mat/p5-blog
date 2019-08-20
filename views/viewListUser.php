<?php $this->title = "Mon Blog - Administration" ?>

<!--  Content  -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h2>Gestion des utilisateurs</h2>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Pseudo</th>
                        <th>Inscrit le</th>
                        <th>Modifier</th>
                        <th>Bannir</th>
                        <th>UserGroupe</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user->getId(); ?></td>
                            <td><?= $this->clean($user->getUsername()); ?></td>
                            <td><?= $user->getCreated(); ?></td>
                            <td>
                                <a class="btn btn-success" href="index.php?p=editUser&id=<?= $user->getId(); ?>">
                                   edit <i class="fas fa-user-edit"></i>

                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="index.php?p=deleteUser&id=<?= $user->getId(); ?>"onclick="return confirm('Attention cette action supprimera également les commentaires et posts associés à cet utilisateur ! Êtes vous sûr ?')">

                                    delete <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                            <td>
                                <?= "<a class='custom-control custom-check-square' href='index.php?p=adminUser&id=" .  $user->getId() . "'>Admin</a>"; ?>


                                <?= "<a class='custom-control custom-checkbox' href='index.php?p=memberUser&id=" .  $user->getId() . "'>Membre</a>"; ?>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

