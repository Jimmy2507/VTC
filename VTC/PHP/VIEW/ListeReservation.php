<?php 
    $listeReservAttente= reservationManager::getListAttente();
    //var_dump($listeReservAttente);
?>
<div class="Colonne">
    <div class="EspaceH"></div>
    <div class="Ligne">
        <div></div>
        <div class="flex3 BgcBleu Blanc Radius Colonne">
            <div class="Centre">
                <div></div>
                <h3>Liste des réservations en attente</h3>  
                <div></div>    
            </div>
            <div class="EspaceH3"></div>
            <?php 
            if(count($listeReservAttente)>0){
                foreach($listeReservAttente as $reserv){
                    echo'
                        <div class="Ligne"> 
                            <div></div>
                            <div class="BgcGris Noir Radius flex6">
                                <div></div>
                                <div class="Colonne">
                                    <div class="Bold">Adresse de départ:</div>    
                                    <div>'.$reserv->getAdresseDepart().'</div>
                                </div>
                                <div></div>
                                <div class="Colonne">
                                    <div class="Bold">Adresse d\'arrivé:</div>    
                                    <div>'.$reserv->getDestination().'</div>
                                </div>
                                <div></div>
                                <div class="Colonne">
                                    <div class="Bold">Date:</div>    
                                    <div>'.$reserv->getDateReservation().'</div>
                                </div>
                            </div>
                            <div></div>
                            <form method="POST" action="?page=ActionPriseEnChargeReserv">
                                <input type="hidden" name="idReservation" value ="'.$reserv->getIdReservation().'">
                                <input type="hidden" name="adresseDepart" value ="'.$reserv->getAdresseDepart().'">
                                <input type="hidden" name="destination" value ="'.$reserv->getDestination().'">
                                <input type="hidden" name="dateReservation" value ="'.$reserv->getDateReservation().'">
                                <input type="hidden" name="idUser" value ="'.$reserv->getIdUser().'">
                                <input type="hidden" name="terminer" value ="'.$reserv->getTerminer().'">
                                <input type="hidden" name="idChauffeur" value ="'.$_SESSION["AMVTC_utilisateur"]->getIdUser().'">
                                <div><button type="submit" class="btn2">Accepter</button></div>
                                <div></div>
                            </form>                            
                        </div>
                        <div class="EspaceH3"></div>   
                    ';
                }
            }else{
                echo"
                <div class='Ligne'>
                    <div></div>
                    <h3>Il n'y a pas de reservation en attente</h3>
                    <div></div>
                </div>
                
                ";
            }
            ?>

        </div>
        <div></div>           
    </div>

</div>
