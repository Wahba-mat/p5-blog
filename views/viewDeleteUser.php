<?php $this->title = 'Projet Blog - Supprimer'; ?>

<?php $this->header = '<h2>Voulez-vous vraiment supprimer cet utilisateur ?</h2>'; ?>

<?php $this->subheader = '<span class="subheading">Pas de retour en arrière possible !</span>'; ?>

<?php $this->button = '<form class="form" role="form" action="index.php?p=delete&id=' . $user->getId() . '" method="post">
                                    <div class="form-actions">
                                        <input type="hidden" id="id" name="id" value="' . $user->getId() . '">
                                        <button type="submit" name="submit" class="btn btn-danger">Oui</button>
                                        <a class="btn btn-primary" href="index.php?p=user&id=' . $user->getId() .'">Non</a>
                                    </div>
                                </form>'; ?>
