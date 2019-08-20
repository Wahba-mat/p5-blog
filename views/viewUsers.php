<?php $this->title = "Mon Blog - Administration" ?>

<?php include 'viewAdmin.php'?>
<!--  Content  -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <h2>Gestion des utilisateurs</h2>
        <p><i class="fas fa-pen"></i> = Editer l'utilisateur</p>
        <p><i class="fas fa-trash-alt"></i> = Supprimer l'utilisateur</p>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Id</th>
                <th>Pseudo</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?= $this->$user->getId() ?></td>
                <td><?= $this->$user->getUsername() ?></td>
                <td>
					<a class="btn btn-success operation" href="<?= $this->$user->getId() ?>">
						<i class="fas fa-pen"></i>
					</a>
                	<a class="btn btn-danger operation" href="<?= $this->$user->getId() ?>" onclick="return confirm('Attention cette action supprimera également les commentaires et posts associés à cet utilisateur ! Êtes vous sûr ?')">
                		<i class="fas fa-trash-alt"></i>
                	</a>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
        </div>

    </div>
  </div>
</div>