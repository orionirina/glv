<!DOCTYPE html>
<html lang="en">
<?php include("../blocks/header.php") ?>
<body>
    <div class="container border border-primary mb-4 mt-3">
    <h1 style="margin-left:200px">INFORMATION DE RÉSERVATION</h1>
        <div class="row">
            <div class="col-sm-6 border border-secondary">
                <div class="div_1 ms-5 me-5 bg-white">
                    <h7 style="margin-left:230px">CLIENT</h7>
                    <div>
                        <form action="../actions/Add_reservation.php" method="POST">
                            <div class="form-group">
                                <input type="text" id="nom" name="nom" placeholder="Nom" required>
                                <input type="text" id="contact" name="contact" placeholder="Contact" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="bg2 col-sm-6 bg-secondary">
                <h7 style="margin-left:220px;color:white;background-color: rgb(182, 176, 176);">INFORMATION DU VOITURE</h7>
                    <div class="containeur_div ms-5 mt-4">
                        <div class="d-flex">
                            <p>Nom:</p>
                            <p style="margin-left:30px">BMW</p>
                        </div>

                        <div class="d-flex">
                            <p>Numéro:</p>
                            <p style="margin-left:30px">2342 TAB</p>
                        </div>

                        <div class="d-flex">
                            <p>Type:</p>
                            <p style="margin-left:30px">Voiture de luxe</p>
                        </div>

                        <div class="d-flex">
                            <p>Places:</p>
                            <p style="margin-left:30px">5 places</p>
                        </div>

                        <div class="d-flex">
                            <div>
                                <p>Tarif:</p>
                            </div>
                      
                        </div>
                        <div class="prix">
                            <ul>
                                <li>
                                    <p>Demi-journée (5h):      70000 ar</p> 
                                </li>
                                <li>
                                    <p>Une journée (10h):           130000 ar</p>
                                </li>
                            </ul>

                            <p>À partir de 130 000/jour selon la destination</p>
                        </div>
                    </div>
            </div>
        </div> 
     
        <button type="submit" class="btn btn-primary ms-3 mb-3" >Submit</button>
    </div>
    



    <script src="../style/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>