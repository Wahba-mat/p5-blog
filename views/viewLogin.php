<?php $this->title = 'Projet Blog - Se connecter'; ?>
<?php $this->header = '<h1>Connexion</h1>'; ?>
<?php $this->subheader = '<span class="subheading">Veuillez vous authentifier avec vos identifiants de connexion</span>'; ?>


<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <form method="post" action="index.php?p=login">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
              <br> <h2>Identifiant </h2> </br>
            <label for="username">Nom d'utilisateur</label>
            <input name="username" type="text" class="form-control" placeholder="Nom d'utilisateur" id="username" required data-validation-required-message="Veuillez renseigner ce champ.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label for="password">Mot de passe</label>
            <input name="password" type="password" class="form-control" placeholder="Mot de passe" id="password" required data-validation-required-message="Veuillez renseigner ce champ.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <br>
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" name="submitted" class="btn btn-primary" value="submitted">Connexion</button>
        </div>
      </form>
    </div>
  </div>
</div>