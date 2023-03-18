<link rel="stylesheet" href="<?php echo base_url("assets/css/apropos.css"); ?>">
<main>
    <br>
	<section class="section">
        <br>
		<div class="container">
            <br>
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <br>
<form  action="Entreprise/update" class="apropos">

    <div class="pdp">
        <div class="photo">
            <img src="<?php echo base_url('assets/file/img/' .$informations['logo']. '') ?> " alt="">
        </div>
    </div>

    <div class="field">
        <span> Nom Entreprise : </span> <input type="text" name="nom_entreprise" value="<?php echo $informations['nom_entreprise'] ?>">
    </div>
    <div class="field">
        <span>Contact : </span> <input type="text" name="tel" value="<?php echo $informations['tel'] ?>">
    </div>
    <div class="field">
        <span>Telecopie : </span> <input type="text" name="telecopie" value="<?php echo $informations['telecopie'] ?>">
    </div>
    <div class="field">
        <span>Objet : </span> <input type="text" name="objet" value="<?php echo $informations['objet'] ?>">
    </div>
    <div class="field">
        <span> Dirigent : </span> <input type="text" name="dirigeant" value="<?php echo $informations['dirigeant'] ?>">
    </div>
    <div class="field">
        <span> Siege : </span>  <input type="text" name="siege" value="<?php echo $informations['siege'] ?>">
    </div>
    <div class="field">
        <span> Date de Creation : </span> <input type="date" name="date_creation" value="<?php echo $informations['date_creation'] ?>">
    </div>
    <div class="field">
        <span> Numero D'Identification Fiscale : </span> <input type="text" name="num_identification_fiscale" value="<?php echo $informations['num_identification_fiscale'] ?>">
    </div>

    <div class="field">
        <span> Numero De Registre de Commerce : </span> <input type="text" name="num_registre_commerce" value="<?php echo $informations['num_registre_commerce'] ?>">
    </div>

    <div class="field">
        <span> Date d'exerice : </span> <input type="text" name="date_debut_exercice" value="<?php echo $informations['date_debut_exercice'] ?>">
    </div>

    <div class="field">
        <span> Devise(s) Tenu Compte : </span><?php echo $devisTenuCompte ?>
    </div>

    <div class="field">
        <span> Devise(s) Equivalence </span> <?php echo $devisEquivalence?>
    </div>

    <button type="submit" class="btn btn-primary" >Update</button>

</form></div>
</div>
</section>
</main>
<br>