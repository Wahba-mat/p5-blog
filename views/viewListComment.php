<?php $this->title = "Mon Blog - Modérer un commentaire" ?>

<!--  Content  -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h2>Gestion des commentaires non-modérés</h2>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date de création</th>
                        <th>Pseudo</th>
                        <th>Commentaire</th>
                        <th>IdArticle</th>
                        <th>Opérations</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($comments as $comment): ?>
                        <tr>
                        <div class='row'>
                            <div class='col-lg-12 col-md-12 mx-auto'>
                                <td><?= $this->clean($comment->getId()); ?> </td>
                                <td><?= $comment->getCreated(); ?> </td>
                                <td><?= $this->clean($comment->getPseudo()); ?> </td>
                                <td><?= $this->clean($comment->getCommentaire()); ?> </td>
                                <td><?= $this->clean($comment->getIdArticle()); ?> </td>
                                <td>
                                    <a class='btn btn-success' href="index.php?p=validateComment&id=<?= $comment->getId(); ?> "onclick="return confirm('Cette action mettra en ligne le commentaire. Êtes vous sûr ?')">
                                        <i class="fa fa-check-square"></i>
                                    </a>
                                    <a class='btn btn-danger' href="index.php?p=deleteComment&id=<?= $comment->getId(); ?>"onclick="return confirm('Cette action supprimera ce commentaire. Êtes vous sûr ?')">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                </td>

                            </div>

                        </div>


                    <?php endforeach; ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>
