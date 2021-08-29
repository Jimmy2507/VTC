<?php 
    $prix = tarifManager::getList();
?>
<div class="Colonne">
    <div class="EspaceH"></div>
    <div class="ligne">
        <div></div>
        <div class="flex3 Colonne BgcBleu Radius Blanc">
            <div class="Ligne">
                <div></div>
                <div class="Centre"><h3>Modifier le prix au kilometre (€)</h3></div>
                <div></div>
            </div>
            <div class="Ligne">
                <div></div>
                <form method="POST" action="?page=ActionGestionPrix">
                    <?php
                    foreach($prix as $prix){
                    echo'
                    <input name="idTarif" type="hidden" value="'.$prix->getIdTarif().'">
                    <div><input name="tarif" type="text" value="'.$prix->getTarif().'"></div>
                    ';                        
                    }
                    ?>
                    <div></div>
                    <div><button class="btn2" type="submit">Valider</button></div>
                </form>
                <div></div>
            </div>
            <div class="EspaceH1"></div>
        </div>
        <div></div>
    </div>
</div>