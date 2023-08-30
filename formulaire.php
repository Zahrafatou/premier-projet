
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
      <form class="d-flex" role="search">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <button class="btn btn-outline-dark" type="submit" onclick="alert('Merci')"><a href="index.php">Retour</a></button>
        </li>
      </ul>
        

      </form>
    </div>
  </div>
</nav>




  <div class="container">
    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="connect.php" method="post">
                <div class="mb-3">

                    <h1 id="bb">Renseignement</h1>
                    <label for="exampleFormControlInput1" class="form-labe" for="prenom">Nom Complete</label>
                    <input type="prenom" class="form-control" id="exampleFormControlInput1" name="prenom" id="prenom" placeholder="Nom et prenom">
                    <i id="icon" class="fa-solid fa-user"></i>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" for="email"> Adress Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email"  id="email">
                    <i id="icon1" class="fa-solid fa-envelope"></i>  
                </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label" for="mesage">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="mesage" id="mesage"></textarea>
                  </div>
            
                  <button class="for3" type="submit"> Soumettre</button>
                </form>
        </div>
    </div>
  </div>
</body>
</html>