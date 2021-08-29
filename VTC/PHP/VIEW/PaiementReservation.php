<div class="Colonne">
    <div class="EspaceH"></div>
    <div class="Ligne">
        <div></div>
        <div class="flex2 BgcBleu Blanc Colonne Radius">
            <div class="Ligne">
                <div></div>
                <div class="Colonne Centre Block">
                    <div class="EspaceH1"></div>  
                    <h3>Adresse de depart :</h3>
                    <div><?php echo $_POST['adresseDepart'] ?></div>
                    <h3>Adresse de d'arrivé :</h3>
                    <div><?php echo $_POST['destination'] ?></div>
                    <h3>Date :</h3>
                    <div><?php echo $_POST['dateReservation'] ?></div>
                    <form class="Colonne" action="?page=ActionReservation" method="POST">
                        <?php 
                        $dis="disabled";
                            echo "
                            <div><input type='hidden' name='adresseDepart' value='".$_POST['adresseDepart']."'></div>
                            <div><input type='hidden' name='destination' value='".$_POST['destination']."'></div>
                            <div><input type='hidden' name='dateReservation' value='".$_POST['dateReservation']."'></div>
                            ";
                        ?>
                        <h3>Prix :</h3>
                        
                        <div class="EspaceH1"></div>   
                        <button type="submit"  class="btn2">Reserver</button>   
                    </form> 
                    <div class="EspaceH1"></div>     
                </div>
                <div></div>
            </div>
        </div>
        <div></div>   
    </div>    
</div>

