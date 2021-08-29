<?php
if(isset($_SESSION["AMVTC_utilisateur"])){
    if(($_SESSION["AMVTC_utilisateur"]->getIdRole()==1)){
        echo'
            <div class="Colonne">
                <div class="EspaceH"></div>
                <div class="ligne">
                    <div></div>
                    <div class="flex3 Colonne BgcBleu Radius Blanc">
                        <div class="Ligne">
                            <div></div>
                            <div class="Centre"><h3>Gestion</h3></div>
                            <div></div>
                        </div>
                        <div class="Ligne">
                            <div></div>
                            <div><a href="?page=FormGestionPrix"><btn class="btn2">Prix</btn></a></div>
                            <div></div>
                            <div><btn class="btn2 Centre">Utilisateur</btn></div>
                            <div></div>
                        </div>
                        <div class="EspaceH1"></div>
                    </div>
                    <div></div>
                </div>
            </div>
        ';
    }else{
        header("location:?page=default");
    }    
}else{
    header("location:?page=FormConnexion");
}

