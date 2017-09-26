<section id="showproduct" class="col s12 m6 purple darken-3">

<h6>Top 5 des vues</h6>
<table>


<thead>
  <tr>
    <th>Nom</th>
    <th>Nombre de vues</th>
  </tr>
</thead>
<tbody>



<?php
foreach ($topvues as $topvue) {  ?>


  <tr>
    <td><?php echo $topvue["name"] ?></td>
    <td><?php echo $topvue["vue"] ?></td>
  </tr>

<?php } ?>


</tbody>
</table>


</section>
