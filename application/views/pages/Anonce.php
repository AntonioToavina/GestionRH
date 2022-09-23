<div  class="modal fade bd-example-modal-lg"  id="part1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <h5 class="modal-title" id="title" style="font-size:40px;color:#1bb1dc"><center>Formulaire</center></h5>
            
            <div class="row" >
                <div class="col-md-5" style="margin:20px 0px 0px 10px">
                    <label>Nom</label>
                    <input type="text" class="form-control"  name="nom" id="nom">
                </div>
                <div class="col-md-5 ml-auto" style="margin: 20px 10px 0px 0px">
                    <label>Prenom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="margin:20px 0px 0px 10px">
                    <label>Date de naissance</label>
                    <input type="date" class="form-control"  name="dN" id="dN">
                </div>
                <div class="col-md-5 ml-auto" style="margin: 20px 10px 0px 0px">
                    <label>Adresse</label>
                    <input type="text" class="form-control" name="adresse" id="adresse">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="margin:20px 0px 0px 10px">
                    <label>Contact</label>
                    <input type="Text" class="form-control"  name="contact" id="contact">
                </div>
                <div class="col-md-5 ml-auto" style="margin: 20px 10px 0px 0px">
                    <label>CIN</label>
                    <input type="text" class="form-control" name="cin" id="cin">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="margin:20px 0px 0px 10px">
                    <label>Genre</label>
                    <select class="custom-select" name="genre" id="genre">
                        <option value="2">Homme</option>
                        <option value="3">Femme</option>
                    </select>
                </div>
                <div class="col-md-5 ml-auto" style="margin: 20px 10px 0px 0px">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="margin:20px 0px 0px 10px">
                    <label>Nom du père</label>
                    <input type="Text" class="form-control"  name="npere" id="npere">
                </div>
                <div class="col-md-5 ml-auto" style="margin: 20px 10px 0px 0px">
                    <label>Prenom</label>
                    <input type="text" class="form-control" name="ppere" id="ppere">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="margin:20px 0px 0px 10px">
                    <label>Profession du père</label>
                    <input type="Text" class="form-control"  name="propere" id="propere">
                </div>
                <div class="col-md-5 ml-auto" style="margin: 20px 10px 0px 0px">
                    <label>Nom de la mère</label>
                    <input type="text" class="form-control" name="nmere" id="nmere">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="margin:20px 0px 0px 10px">
                    <label>Prenom </label>
                    <input type="Text" class="form-control"  name="pmere" id="pmere">
                </div>
                <div class="col-md-5 ml-auto" style="margin: 20px 10px 0px 0px">
                    <label>Profession de la mère</label>
                    <input type="text" class="form-control" name="promere" id="promere">
                </div>
            </div>
            <div class="row">
                <div  style="margin:0 auto; margin-bottom:20px;margin-top:20px">
                    <button onclick="nextForm()" class="btn btn-primary">Suivant</button>
                </div>
            </div>
            
        </div>
    </div>
    
</div>

<div  class="modal fade bd-example-modal-lg"  id="part2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <h5 class="modal-title" id="title" style="font-size:40px;color:#1bb1dc"><center>Formulaire</center></h5>
            
            <div class="row" >
                <div class="col-md-5" style="margin:20px 0px 0px 10px">
                    <label>Affiliation</label>
                    <select class="custom-select" name="affiliation" id="affiliation">
                        <option value="2">Social</option>
                        <option value="3">Commercial</option>
                        <option value="3">Autre</option>
                    </select>
                </div>
                <div class="col-md-5 ml-auto" style="margin: 20px 10px 0px 0px">
                    <label>Situation juridique</label>
                    <input type="text" class="form-control" name="sjudq" id="sjudq">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="margin:20px 0px 0px 10px">
                    <label>Experience</label>
                    <input type="date" class="form-control"  name="exp" id="exp">
                </div>
                <div class="col-md-5 ml-auto" style="margin: 20px 10px 0px 0px">
                    <label>Diplome</label>
                    <input type="text" class="form-control" name="diplome" id="diplome">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="margin:20px 0px 0px 35px">
                    <input type="checkbox" class="custom-control-input"  name="marie" id="marie">
                    <label class="custom-control-label" for="marie">Marié(e)</label>
                    
                </div>
                <div class="col-md-5 ml-auto" style="margin: 20px 10px 0px 0px">
                    <label>Nombre d'enfants</label>
                    <input type="number" class="form-control" name="nbE" value="0" id="nbE">
                </div>
            </div>
            
                <div class="row">
                    <div  style="margin:0 auto; margin-bottom:20px;margin-top:20px">
                        <button onclick="newPostulant('<?php echo base_url(); ?>')" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            
        </div>
    </div>
    
</div>

<section id="why-us" class="wow fadeIn">
      <div class="container-fluid">
        
        <header class="section-header">
          <h3>Recrutement de personnel</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="<?php echo base_url('assets/img/why-us.jpg'); ?>" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
                <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
                <p>
                Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
                et temporibus. Labore est odio.

                Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
                </p>

                <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>Experience</h4>
                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
                </div>

                <div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Diplome</h4>
                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
                </div>
                
                <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Personnalite</h4>
                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
                </div>
              
            </div>

            </div>

        </div>
    </div>
</section>
    <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">Call To Action</h3>
                    <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <button onclick="inscription()" class="btn btn-primary">Inscription</button>
                </div>
            </div>

        </div>
    </section>

