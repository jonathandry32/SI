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
        <center><h2>Devis d'equivalence </h2></center>
        <form action="<?php echo base_url('InsertForm/insertDevisEquivalence');?>" method="POST"  enctype='multipart/form-data'>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Devis de tenu de compte</label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="dev">
                        <?php for ($i=0;$i<count($list);$i++){ ?>
                            <option value="<?php echo $list[$i]['id_devis']; ?>"> <?php echo $list[$i]['nom']; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Taux</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="taux">
                  </div>
                </div>            
            <br>
            <center><button type="submit" class="btn btn-primary" >Ajouter</button></center>
            <hr>
        </form>
        <hr>
    </div>

    <!-- <script src="<?php //echo base_url('assets/js/uploader.js') ?> " defer></script> -->
</body></div>
</div>
</section>
</main>
<br>