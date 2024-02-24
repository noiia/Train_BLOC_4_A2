<?php
function addNewContainer($Title, $Description)
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

if (isset($_POST['action'])) {
    addNewContainer('Test 555555555', 'Test description iuoihzoifheoezifzoenfozienfoiznefoiznef');
}
?>