<center><h2>MODIFIER UN SERVICE A LA BASE DE DONNÉE</h2></center>
<div class ="row">
<div class="container-fluid mt-3">
    <div class="d-flex justify-content-center p-1 mb-2">

                <form action= "index.php?ctl=service&action=ValiderEdit" method ="POST">
                    <div class="form-inline">
                        <label for="nomService">Nom services</label>
                        <input type="text" name = "num" class="form-control" value=<?php echo $unService['id']; ?>>
			            <input type="text" name = "nom" class="form-control" value=<?php echo $unService['nom']; ?>>
                        <button type="submit" class="btn btn-primary">Modify</button>
                    </div>
                </form>
    </div>
</div>

