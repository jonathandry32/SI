<link rel="stylesheet" href="<?php echo base_url("assets/css/apropos.css"); ?>">
<main>
    <br>
	<section class="section">
        <br>
		<div class="container">
            <br>
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <br>
            
<div class="apropos">

    <div class="pdp">
        <div class="photo">
            <img src="<?php echo base_url('assets/file/img/' .$informations['logo']. '') ?> " alt="">
        </div>
    </div>
    
    <div class="field">
        <span> Nom Entreprise : </span> <?php echo $informations['nom_entreprise'] ?>
    </div>
    <div class="field">
        <span>Contact : </span><?php echo $informations['tel'] ?>
    </div>
    <div class="field">
        <span>Telecopie : </span> <?php echo $informations['telecopie'] ?>
    </div>
    <div class="field">
        <span>Objet : </span><?php echo $informations['objet'] ?>
    </div>
    <div class="field">
        <span> Dirigent : </span> <?php echo $informations['dirigeant'] ?>
    </div>
    <div class="field">
        <span> Siege : </span> <?php echo $informations['siege'] ?>
    </div>
    <div class="field">
        <span> Date de Creation : </span> <?php echo $informations['date_creation'] ?>
    </div>
    <div class="field">
        <span> Numero D'Identification Fiscale : </span> <?php echo $informations['num_identification_fiscale'] ?>
    </div>
    
    <div class="field">
        <span> Numero De Registre de Commerce : </span><?php echo $informations['num_registre_commerce'] ?>
    </div>

    <div class="field">
        <span> Date d'exerice : </span> <?php echo $informations['date_debut_exercice'] ?>
    </div>

    <div class="field">
        <span> Devise(s) Tenu Compte : </span><?php echo $devisTenuCompte ?>
    </div>

    <div class="field">
        <span> Devise(s) Equivalence </span>    
        <?php for($i=0;$i<count($de);$i++) { ?>
            <?php echo $de[$i]['nom'].' , '; ?>
        <?php } ?>
    </div>
    
    
</div>

<center> <a href="<?php echo base_url('Entreprise/AproposModification')?>" class="btn btn-primary" >Modifier</a> </center>
</div>
</div>
</section>
</main>
<br>