<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $title; ?></title>
  <meta content="" name="<?php echo $description; ?>">
  <meta content="" name="<?php echo $keywords; ?>">
  <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3" style="margin-top: 50px;">

              <div class="card-body">

                <div class="pt-4 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Ajouter les donnees de l'entreprise</h5>
                  <p class="text-center small">Entrez les informations requis.
                  </p>
                </div>

                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo base_url("InsertForm/"); ?>">
                  
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nom de l'entreprise</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nom_entreprise">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Activite</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="objet">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nom du dirigeant</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="dirigeant">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Telephone</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="tel">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Telecopie</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="telecopie">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Mot de passe</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="pass">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Adresse du siege</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="siege">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">NIF</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="num_identification_fiscale">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Stat</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="num_statistique">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Registre de commerce</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="num_registre_commerce">
                    </div>
                  </div>            
                  <div class="row mb-3">
                      <label class="col-sm-3 col-form-label">Devis de tenu de compte</label>
                      <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" name="idniveauEtude">
                            <?php
                            foreach($devis as $dev) 
                            {
                                ?>
                                    <option value="<?php echo $dev['id_devis'];?>"><?php echo $dev['nom'];?></option>
                                <?php
                                if($dev['id_devis']==5)
                                {
                                    ?>
                                        <option value="<?php echo $dev['id_devis'];?>" selected><?php echo $dev['nom'];?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                      </div>
                    </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Date de creation</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="date_creation">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Date de debut d'exercice</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="date_debut_exercice">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Logo</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="logo">
                    </div>
                  </div>
                  <!-- <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Devise d'equivalence</label>
                    <div class="col-sm-9">
                      <input type="hidden" class="form-control" name="devise_equivalence">
                    </div>
                  </div> -->

                <div class="col-6">
                  <button class="btn btn-secondary w-100" type="reset">Annuler</button>
                </div>
                <div class="col-6">
                  <button class="btn btn-primary w-100 " type="submit">Save</button>
                </div>
              </form>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->
