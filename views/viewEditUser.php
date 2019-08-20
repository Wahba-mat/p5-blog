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
                        <th>Password</th>
                        <th>Groupe</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user->getId(); ?></td>
                            <td><?= $this->clean($user->getUsername()); ?></td>
                            <td><?= $user->getPassword(); ?></td>
                            <td><?= $user->getUserType(); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
