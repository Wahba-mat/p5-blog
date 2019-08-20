<?php $this->title = "Mon Blog - Administration" ?>

    <!-- List of Users -->
<?php foreach ($users as $user): ?>
    <div class='row'>
        <div class='col-lg-12 col-md-12 mx-auto'>
            <a href="index.php?p=user&id=<?= $user->getId(); ?>"><h2><?= $this->clean($user->getUsername()); ?></h2></a>
            <p><em>Inscrit le <?= $user->getCreated(); ?>.</em></p>

            <a href="index.php?p=deleteUser&id=<?= $user->getId() ?>"><i class="fa fa-trash"> </i></a>


        </div>
    </div>

    <hr>

<?php endforeach; ?><?php
