<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="./output.css" rel="stylesheet">
</head>

<body class="body-container">
    <div class="top-bar">
        <a href="carte_france.php">Carte de france</a>
        <input class="btn-connexion" type="button" value="Connexion">
    </div>

    <script>
        $(document).ready(function () {
            $('.addContainer-intern').click(function () {
                var clickBtnValue = $(this).val();
                var ajaxurl = 'ajax.php';
                data = { 'action': clickBtnValue };
                $.post(ajaxurl, data, function (response) {
                    // Ajouter le nouveau contenu à un conteneur spécifique
                    $('.runway-container').append(response);
                });
            });
        });
    </script>


    <div class="runway-container">
        <a href="www.google.com">
            <span>
                <div class="container-intern">
                    <div class="container-div-image">
                        <img class="container-image" src="Asset/voiture.jpeg">
                    </div>
                    <div class="container-div-para">
                        <h1 class="container-h1">911, le démon du seigneur</h1>
                        <p class="container-paragraph">Paragraphe basique qui explique qu'une 911 c'est incroyable</p>
                    </div>
                </div>
            </span>
        </a>
    </div>

    <input type="submit" name="addButton" class="addContainer-intern" value="+">

</body>

</html>