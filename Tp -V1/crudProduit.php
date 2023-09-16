
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Beauty Salon</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">

    

    <!-- Bootstrap core CSS -->
<link href="./inc/css/bootstrap.min.css" rel="stylesheet">
<link href="./inc/css/starter-template.css" rel="stylesheet">
<link rel="icon" href="./inc/images/logo.jpg">

<!-- Tableau CSS + JS -->

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Inclure DataTables jQuery (JavaScript) -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<!-- Inclure DataTables jQuery (CSS) -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<!--  -->
<script>
 $(document).ready(function() {
  $('#example').DataTable({
    "oLanguage": {
      "sSearch": "" // Pour supprimer le texte "Rechercher" du champ de recherche
    },
    "pageLength": 3 ,
    "lengthChange": false // Pour désactiver le contrôle de la longueur
  });
});

</script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .dataTables_filter input{
        border-radius: 30px !important;
    
        margin-bottom: 10px;

      }
    </style>

    
  
  </head>
  <body>
    
<div class="col-lg-10 mx-auto p-3 py-md-5">

  <?php
include('./header.php');
?>
  <main>
  <div class="table-responsive">
    <h5 class="">Gestion des Produits</h5>
 <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Désignation</th>
            <th>Catégorie</th>
            <th>Quantité de Stock</th>
            <th>Prix Unitaire</th>
            <th>Promo</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    <?php
      // Tableau de produits (similaire à celui de votre boucle PHP précédente)
      $products = [
        [
          'code' => 'P001',
          'designation' => 'Produit 1',
          'quantite' => 10,
          'prix_unitaire' => 20.99,
          'promo' => '10%',
          'image' => 'data:image/jpeg;base64,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'
        ],
        [
          'code' => 'P002',
          'designation' => 'Produit 2',
          'quantite' => 5,
          'prix_unitaire' => 15.49,
          'promo' => '10%',
          'image' => 'data:image/jpeg;base64,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H0728lxzi5Xzzq7r5ywtO8becAArraPS3q1a++PtP39zartPtQtwcDa+2xa4X22cCCCOsEAq80eMuFmzDMPbbvHaOVYpiuKxUtVT08mZpqbCN+wxh+cNDXm/q7XDbu57KubJtIDmuy78rmut3Lsad4tWL15SzmNLWjHPzZxFK2RocwhzTyhfRYZT1TmOzMcWnltuPURyq5+nHjeyM9mYK6LtO+x3ierxZAioIsTiLWmSWGNzhfK6Vlx3r36TpveafxWeayakxicSrEVH6TpveafxWeaek6b3mn8VnmiFYio/SdN7zT+KzzT0nTe80/is80FYio/SdN7zT+KzzT0nTe80/is80FYio/SdN7zT+KzzT0nTe80/is80FYio/SdN7zT+KzzT0nTe80/is80FYio/SdN7zT+KzzT0nTe80/is80FYio/SdN7zT+KzzT0nTe80/is80FYio/SdN7zT+KzzT0nTe80/is80FYio/SdN7zT+KzzU+k6b3mn8WPzQVaKj9J03vNP4rPNPSdN7zT+KzzQViKj9J03vNP4rPNPSdN7zT+KzzQYDru/QaL69+RKtNLb+uasikoqMRyxyEVtyGPa8gcDILmx3bVqBWV5AiIpSLP8AVOy81W/2Yoh3l3ksAWaaCYy2ijnzROeZHj1muDSA1u6xHWe9UbVoa2vo209Gu9aY5cI9ffMR8zMRMZbYRYrHpjAT60U47Mjh+Jfdul1KeWVvbH/tuvOX6F6Qrz0be6M+WV3+TT9qGRqHKwjSujP/ADiO2KYfwX3ZpFSO/wCoiH692fiAVFujttrxtoakf8W+zKL09qPjDAtaUgNVTs5WwFx7HP2fhKwymndC8Pie+N43OY4tPZs3jqWRawKhsuIFzHNe1sMLAWEOaRtdsI/WWNL1GxUmmz0rPZ+VEz1ssqw3Tiojs2oYyoZsBd81J23AynuHaslj00oXMzGWRrrbY3RvLwea4GU961goV06dZX02vVrwznx4r1pRjnpCVhDSyGJpbEx9i65tmc62y5sO5WPIOYdwXpFnEY4QotabTvW5oyD2R3BMg9kdwUopQ85BzDuCZG+yO4L2oQecjfZHcEyj2R3BekQRkHsjuCZB7I7gpRB5yj2R3BTkHsjuClEHnIOYdwU5G8w7gpRB5yDmHcFOQeyO4KUQeco9kdwTIOYdwXpEHnKPZHcEyj2R3BekQecg5h3BMo5h3BekQeco9kdwTKPZHcF6RB5DQNwA7F6REBFKhQCv+EttC3rLj9qsCyWibaJg/shdHo2v6lp7vr+FWryh90RF2FIiIgsOMC0va0KhVzxseuw87SrYvP7ZH69/H6Q2KejAiItZmIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIClQiABcgc5AWVNFgBzALGacXewf2m/esnXW6Njq2nvj5KdXnApReXOsWjnv9y6apKkoiC04235s9oVpV6xsfzbDzO/grKuHt8Y158I8l+n6KVClQtJmIiIlKhEQEREBERAREQEREBERARSoQEREBSoRARSoQERSghSoRAREQVOHtvKztP3FZGiLtdHftT4z5Qo1PSFa6yptPEBuba/aURXbXea0iY9qvnn6MaxmV0REWyxUGLi8R6nN+9WJEXF6R/djw+sr9LklERaDNCIiJEREBERAREQEREEoiIhCIiJEREEqERECIiJSoREQIiIkREQSoREQ//9k='
        ],
        [
          'code' => 'P003',
          'designation' => 'Produit 2',
          'quantite' => 5,
          'prix_unitaire' => 15.49,
          'promo' => '10%',
          'image' => 'data:image/jpeg;base64,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'
        ],
        [
          'code' => 'P004',
          'designation' => 'Produit 2',
          'quantite' => 5,
          'prix_unitaire' => 15.49,
          'promo' => '10%',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThBSttxP-kk_YDH4KGSjsI7wW8Klka2qoJGaOVZXYqGyqBSJbo3GBgGb6tmNkcXFReIcw&usqp=CAU'
        ],
        [
          'code' => 'P005',
          'designation' => 'Produit 2',
          'quantite' => 5,
          'prix_unitaire' => 15.49,
          'promo' => '10%',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVxQ3ywuwRiw-zntjzFgu64VSYWxAXvZyeeTH80AGBwj_nBW6bMXrGUILyv7Hu-WolYOY&usqp=CAU'
        ],
        [
          'code' => 'P006',
          'designation' => 'Produit 2',
          'quantite' => 5,
          'prix_unitaire' => 15.49,
          'promo' => '10%',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjKjuprWlAi2j82msNhND7bVspOoqKQUiTNs8o-cvM4FjENZSSw8OoeIdCvmCofodIgJM&usqp=CAU'
        ],
        // Ajoutez d'autres produits ici
      ];

      // Parcourez le tableau de produits et générez les lignes de la table
      foreach ($products as $product) {
        echo '<tr class="text-center">';
        echo '<td>' . $product['code'] . '</td>';
        echo '<td>' . $product['designation'] . '</td>';
        echo '<td>' . $product['quantite'] . '</td>';
        echo '<td>' . $product['prix_unitaire'] . '</td>';
        echo '<td>' . $product['promo'] . '</td>';
        echo '<td><img width="120px" src="' . $product['image'] . '" alt="' . $product['designation'] . '"></td>';
        echo '<td class="">';
        echo '<button class="btn btn-white" title="consulter">';
        echo '<i class="fa fa-eye text-info"></i>';
        echo '</button>';
        echo '<button class="btn btn-white" title="modifier">';
        echo '<i class="fa fa-pencil text-warning"></i>';
        echo '</button>';
        echo '<button class="btn btn-white" title="supprimer">';
        echo '<i class="fa fa-trash text-danger"></i>';
        echo '</button>';
        echo '</td>';
        echo '</tr>';
      }
      ?>

    

        <!-- Ajoutez d'autres lignes de données ici -->
    </tbody>
</table>


    </div>  
  </main>
  <?php
include('./footer.php');
?>
</div>


    <script src="./inc/js/bootstrap.bundle.min.js" ></script>

      
  </body>
</html>
