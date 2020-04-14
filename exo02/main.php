<!DOCTYPE html>
<html lang="en">

<head>
    <title>Exo02</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/5bb1d77498.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-8 mx-auto">
                <div class="card my-5">
                    <h5 class="card-header bg-dark text-white text-uppercase font-weight-bold">
                        🌸 Tout doux List 🌸
                    </h5>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" id="search" class="form-control" placeholder="Rechercher dans la liste">
                            <div class="input-group-append">
                                <span class="input-group-text"> <i class="fas fa-search"></i> </span>
                            </div>
                        </div>
                        <ul class="list-group mb-3">
                            <?php
                            $todo = array("Dire bonjour aux papillons", "Manger des bananes", "Adopter une lampe à huile", "Se déplacer tel une chenille");
                            foreach ($todo as $oneTodo) {
                            ?>
                                <li class="list-group-item">
                                    <i class="far fa-square done-icon"></i>
                                    <i class="far fa-check-square done-icon"></i>
                                    <span class="todo-text"><?= $oneTodo ?></span>
                                    <i class="far fa-trash-alt"></i>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <button id="clearBtn" type="button" class="btn btn-dark btn-sm"> 🧻 Effacer la liste</button>
                    </div>
                    <div class="card-footer">
                        <form id="form">
                            <div class="input-group">
                                <input type="text" class="form-control" id="todo" placeholder="Ajouter un objectif">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-ajout text-uppercase text-dark"><i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>