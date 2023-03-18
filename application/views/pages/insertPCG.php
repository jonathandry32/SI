<main>
    <br>
	<section class="section">
        <br>
		<div class="container">
            <br>
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <br>
<body>
    <div class="cont">
        <center><h2>Plan Comptable de Gestion</h2></center>
        <form action="<?php echo base_url('InsertForm/insertPCG');?>" method="POST"  enctype='multipart/form-data'>
            <div>
                <h5>Numero de compte:</h5>
                <input type="text" class="form-control" id="num" name="num" required>
            </div>
            <div>
                <h5>Intitule:</h5>
                <input type="text" class="form-control" id="intitule" name="intitule" required>
            </div>
            <br>
            <center><button type="submit" class="btn btn-primary" >Ajouter</button></center>
            <hr>
        </form>
        <center>
            <h2>Importer fichier CSV</h2>
            <form action="<?php echo base_url('PlanComptable/readCsvFile');?>" method="POST"  enctype='multipart/form-data'>
                <label for="importer" class="uploader">
                    <i class="bi bi-file-earmark-arrow-down"></i>
                </label>
                <!-- <input id="importer" type="file" style="display: none;"> -->
                <input type="file" name="plan" id="importer" hidden multiple>

                <br>
                <button type="submit" class="btn btn-success">Importer</button>
            </form>
        </center>
        <hr>
    </div>

    <!-- <script src="<?php //echo base_url('assets/js/uploader.js') ?> " defer></script> -->
</body></div>
</div>
</section>
</main>
<br>