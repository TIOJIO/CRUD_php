<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.css">
  <title>Document</title>
</head>

<body>
  <div class="">
    <!-- création du tableau -->
    <div class="bd-example">
      <table class="table">
        <h2 class="text-center">Liste Des Etudiants</h2>
        <thead class="table-light">
          <tr>
            <th scope="col">Idetudiant</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Email</th>
            <th scope="col">Numéro</th>
            <th scope="col">Actions</th>

          </tr>

        </thead>
        <tbody>
          <!-- début de la boucle qui va récupérer tout les éléments dans la bd -->
          <?php
            include_once('config.php');
            $req = $pdo->prepare("SELECT * FROM etudiant");
            $req->execute();
            $result = $req->fetchAll();
          ?>

          <?php foreach ($result as $row): ?>
            <tr>
              <td><?php echo $row['idetudiant'] ?></td>
              <td><?php echo $row['nom'] ?></td>
              <td><?php echo $row['prenom'] ?></td>
              <td><?php echo $row['date_naissance'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['numero'] ?></td>
              
              <?php $id = $row['idetudiant'] ?>
              
              <td>
                  <?php 
                    echo '<a href="delete.php?$idi='.$id.'"><button class="btn btn-danger" type="submit" name="sup">Supprimer</button></a>
                  ';?>
                  <?php                    
                  echo '<a href="mod.php?$idi=' . $id . '"><button class="btn btn-warning ">Modifier</button></a>
                ';?>
              </td>
            </tr>
          <?php endforeach ?>

          <!-- fin de la boucle -->
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>