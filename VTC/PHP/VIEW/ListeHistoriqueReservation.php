<?php
$historique = reservationManager::getList($_SESSION['AMVTC_utilisateur']->getIdUser());
?>
<div class="Colonne">
    <div class="EspaceH"></div>
    <div class="Ligne">
        <div></div>
        <div class="flex3 BgcBleu Blanc Radius Colonne">
            <div class="Centre">
                <div></div>
                <h3>Historique de vos reservation</h3>  
                <div></div>    
            </div>
            <div class="EspaceH3"></div>
            <?php 
                if(count($historique)>0){
                    foreach($historique as $h){
                        echo '
                        <div class="Ligne"> 
                        <div></div>
                            <div class="BgcGris Noir Radius flex6">
                                <div></div>
                                <div class="Colonne">
                                    <div class="Bold">Adresse de départ:</div>    
                                    <div>'.$h->getAdresseDepart().'</div>
                                </div>
                                <div></div>
                                <div class="Colonne">
                                    <div class="Bold">Adresse d\'arrivé:</div>    
                                    <div>'.$h->getDestination().'</div>
                                </div>
                                <div></div>
                                <div class="Colonne">
                                    <div class="Bold">Date:</div>    
                                    <div>'.$h->getDateReservation().'</div>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="EspaceH3"></div> 
                        ';
                    }


                }else{
                    echo"
                    <div class='Ligne'>
                        <div></div>
                        <h3>Vous n'avez pas encore fait de réservations</h3>
                        <div></div>
                    </div>
                    
                    ";
                }
            ?>
        </div>
        <div></div>
    </div>
</div>