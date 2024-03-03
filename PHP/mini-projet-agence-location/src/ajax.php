<?php
	require_once('Cars\SUV.php');
	require_once('Cars\Berline.php');
	require_once('Cars\GT.php');

	// * variables globales
	$formulaire_valide = false;

function ajouterContainer($Title, $Description)
{
    echo '<a href="www.google.com">
            <span>
                <div class="container-intern">
                    <div class="container-div-image">
                        <img class="container-image" src="Asset/voiture.jpeg">
                    </div>
                    <div class="container-div-para">
                        <h1 class="container-h1">' . $Title . '</h1>
                        <p class="container-paragraph">' . $Description . '</p>
                    </div>
                </div>
            </span>
        </a>';
}

function nouveauFormulaire(){
    $nom = "";
    $type = "";
    $trainRoulant = "";
    $nbrPlaces = 0;
    $estDecapotable = false;
    $description = "";

    echo '<div class="formulaire" id="formulaire">
				<div class="container-div-para">
					<div class="first-element">
						<h1 class="container-h1">Nouveau véhicule</h1>
						<div>
							<label for="nom-voiture">Nom de voiture</label>
							<input type="text" class="tb" id="nom-voiture"/>
						</div>
						<div>
							<label for="type-voiture">Type de voiture</label>
							<select id="type-voiture" name="type-voiture">
								<option value="SUV">SUV</option>
								<option value="Berlines">Berlines</option>
								<option value="GT">GT</option>
							</select>
						</div>
						<div>
							<label for="train-roulant-voiture">Train roulant</label>
							<input type="text" class="tb" id="train-roulant-voiture"/>
						</div>
						<div>
							<label for="places-voiture">Nombre de places</label>
							<input type="range" class="tb" id="places-voiture" min="2" max="7" step="1"/>
							<p>Nombre de places : <output id="nbr-place-value"></output></p>
						</div>
						<div>
							<input type="checkbox" class="Cbox" id="decapotable-voiture"/>
							<label for="decapotable-voiture">est décapotable</label>
						</div>
						<div>
							<label for="description-voiture" class="description-title">Description de la voiture</label>
							<input
								type="text"
								class="tb-description"
								id="description-voiture"
                                value=""
							/>
						</div>
					</div>
					<div class="second-part">
						<div>
							<label for="photo-vehicule" class="photo-title">Photo de la voiture</label>
							<input type="file" class="file-catcher" id="photo-vehicule" />
						</div>
						<div class="div-bouton-ajouter">
							<input
								type="submit"
								name="addCarButton"
								class="bouton-ajouter"
								value="ajouter"
							/>
						</div>
					</div>
				</div>
			</div>
    ';
}

function creationNouvVoiture($type, $nom, $trainRoulant, $nbrPlaces, $estDecapotable, $description) {
	$voiture_personnelle ="";
	switch ($type) {
			case 'SUV' : 
			$voiture_personnelle = new SUV($nom, $trainRoulant, $nbrPlaces, $estDecapotable, $description);
			break;
			case 'Berline' : 
			$voiture_personnelle = new Berline($nom, $trainRoulant, $nbrPlaces, $estDecapotable, $description);
			break;
			case 'GT' : 
			$voiture_personnelle = new GT($nom, $trainRoulant, $nbrPlaces, $estDecapotable, $description);
			break;
		}
	echo $voiture_personnelle;
}

if ($_POST["action"] == '+') {
        nouveauFormulaire();
        if ($_POST["action"] == 'ajouter'){
			creationNouvVoiture($_POST["type"], $_POST["nom"], $_POST["trainRoulant"], $_POST["places"], $_POST["decapotables"], $_POST["description"]); 
            ajouterContainer($_POST["nom"], $_POST["description"]);
        }
    }