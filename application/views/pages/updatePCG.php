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
        <form action="<?php echo base_url('InsertForm/updatePCG');?>" method="POST"  enctype='multipart/form-data'>
            <input type="hidden" name="id_pcg" value="<?php echo $id_pcg;?>">
            <input type="hidden" name="num" value="<?php echo $num;?>">
            <input type="hidden" name="intitule" value="<?php echo $intitule;?>">
            <div>
                <h5>Numero de compte:</h5>
                <input type="text" class="form-control" id="num" name="num" value="<?php echo $num;?>" required>
            </div>
            <div>
                <h5>Intitule:</h5>
                <input type="text" class="form-control" id="intitule" name="intitule" value="<?php echo $intitule;?>" required>
            </div>
            <br>
            <center><button type="submit" class="btn btn-primary" >Modifier</button></center>
            <hr>
        </form>
        <hr>
    </div>
</body>
</div>
</div>
</section>
</main>
<br>