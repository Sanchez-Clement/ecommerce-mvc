
<section id="detail" class="col s12  m8">

    <h2 class="header"><?php  echo $produit[0]['nom_article'] ; ?></h2>
    <div class="card ">
      <div class="card-image">
        <img src="img/produits/<?php  echo $produit[0]['nom_image'] ; ?>">
      </div>

        <div class="card-content lime lighten-3">
          <p><?php  echo $produit[0]['description_article'] ; ?></p>
        </div>
        <div class="card-action">
          <a href="index.php">Home</a>

        </div>

    </div>


</section>
