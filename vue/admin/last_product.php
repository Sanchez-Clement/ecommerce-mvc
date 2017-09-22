<section id="showuser" class="col s12 m6 purple darken-3">


  <h6>derniers ajouts</h6>
  <table>


  <thead>
    <tr>
      <th>Titre</th>
      <th>auteur</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($lastvues as $lastvue) {  ?>


  <tr>
    <td><?php echo $lastvue["name"] ?></td>
    <td><?php echo $lastvue["auteur"] ?></td>
  </tr>

<?php } ?>



</tbody>
</table>
  </section>
