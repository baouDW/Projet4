<?php
require('model.php');
$posts= getPosts();
?>
<a href="accueil.php">Retour a l'accueil</a>
<div>
    <form method="post" action="traitement.php">
        <p>
           <label for="titre">
          Titre
           </label>
           <br />           
           <input type="text" name="titre">       
       </p>
       <p>
           <label for="texte">
          Texte
           </label>
           <br />           
           <textarea name="texte" id="texte" rows="10" cols="50"></textarea>       
       </p>
       <p><input type="submit" name="ajouter" value="Ajouter un article"></p>
    </form>
</div>
<?php
while ($data = $posts->fetch())
{
?>    
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
                
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="postView.php?id=<?= $data['id'] ?>"">Afficher les commentaires</a></em>
            <em><a href="updateView.php?id=<?= $data['id'] ?>">Modifier</a></em>
            <em><a href="delete.php?id=<?= $data['id'] ?>">supprimer</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>