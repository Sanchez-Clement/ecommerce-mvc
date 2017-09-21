<?php
foreach ($produits as $produit) {?>
  <section class="col s12 m6 l4">
    <div class="card">
      <div class="card-image">
        <img src="img/produits/<?php echo $produit["nom_image"]?>">

        <form  action="controleur/user/detail_produit_post" method="post">
          <input type="hidden" name="id" value="<?php echo $produit["id_article"]?>">
          <button type="submit" class="btn-floating btn-large halfway-fab waves-effect waves-light light-blue darken-4" ><i   class="material-icons">add</i></button>
        </form>


      </div>

      <div class="card-content lime lighten-3">
        <h3 class="card-title"><?php echo $produit["nom_article"]?></h3>
        <p><?php echo substr($produit["accroche_artcile"], 0, 250) . "..."; ?></p>
      </div>
    </div>
  </section>
<?php }
 ?>
