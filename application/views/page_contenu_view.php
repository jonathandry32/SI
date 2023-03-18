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

                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo base_url("welcome/insert"); ?>">
                  
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nom de l'entreprise</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nom">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Activite</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="act">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nom du dirigeant</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="dg">
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
                      <input type="text" class="form-control" name="tc">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Mot de passe</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="psw">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Adresse du siege</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="siege">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Adresse d'execution</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="execution">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">NIF</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nif">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Stat</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="stat">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Registre de commerce</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="rdc">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Devise du tenu de compte</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="devis_tc">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Date de creation</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="date_c">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Date de debut d'exercice</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="date_d">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="status">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Logo</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="logo">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Plan Comptable</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="pcg">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Devise d'equivalence</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="devis_e">
                    </div>
                  </div>

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
