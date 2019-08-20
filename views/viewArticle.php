<?php $this->title = 'Projet Blog - ' . $this->clean($article->getTitle()); ?>

<?php if (!$this->isConnected()): ?>
<?php else: ?>
    <?php $this->header = "<a class='btn btn-success' href='index.php?p=edit&id=" . $article->getId() . "'>Modifier</a>
						<a class='btn btn-danger' href='index.php?p=delete&id=" . $article->getId() . "'>Supprimer</a>
						<a class='btn btn-primary' href='index.php?p=list'>Retour</a>"; ?>
<?php endif; ?>
<!-- View Article -->

<div class="row">
    <div class="col-lg-12 col-md-12 mx-auto">


        <h1><?= $this->clean($article->getTitle()); ?></h1>
        <p><em>Ecrit par <?= $this->clean($article->getAuthor()); ?>, le <?= $article->getCreated(); ?>. Modifié
                le <?= $article->getUpdated(); ?>.</em></p>
        <p><strong><?= nl2br($this->clean($article->getChapo())); ?></strong></p>
        <p><?= nl2br($this->clean($article->getContent())); ?></p>
        <?php if (!$this->isConnected()): ?>
        <?php else: ?>
            <?= "<a class='btn btn-success' href='index.php?p=edit&id=" . $article->getId() . "'>Modifier</a>"; ?>
            <?= "<a class='btn btn-danger' href='index.php?p=delete&id=" . $article->getId() . "'>Supprimer</a>"; ?>
            <a class="btn btn-primary" href="index.php?p=list">Retour</a>
        <?php endif; ?>

    </div>
</div>
</br>
<?php if (!$this->isConnected()): ?>
    <span>&#9888;</span>&nbsp&nbsp;Veuillez vous connecter si vous souhaitez ajouter commentaire !</br>

<?php else: ?>

    <h2>Poster un commentaire :</h2>
    <form action="index.php?p=addComment&idArticle=<?= $article->getId() ?>" method="post"/>
    <div>
        <label for="comment">Commentaire</label><br/>
        <textarea id="comment" name="commentaire"></textarea>
    </div>
    <div>
        <input type="submit"/>
    </div>
    </form>
<?php endif; ?>

<br>
<h2><em>Commentaires :</h2>
<?php foreach ($article->getComments() as $comment): ?>

    <div class='row'>
        <div class='col-lg-12 col-md-12 mx-auto'>
            <em>Commenté le <?= $comment->getCreated(); ?>, par
                <strong><?= $this->clean($comment->getPseudo()); ?></h3></strong> :
                <?= $this->clean($comment->getCommentaire()); ?>

                <?php if ($this->isConnected()): ?>
                    <a class='alert-danger' href="index.php?p=deleteComment&id=<?= $comment->getId(); ?>">
                        <i class="fa fa-trash"></i>
                    </a>
                <?php endif; ?>
        </div>

    </div>


<?php endforeach; ?>

