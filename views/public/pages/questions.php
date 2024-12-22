<?php
include "config/env.php";
include "views/public/include/pages_header.php";
include "views/public/include/navbar.php";
?>






<!-- question start -->
<section class="question-body mb-90">
        <div class="has-breadcrumb-bg mb-120" style="background-image: url('<?= $env['APP_URL']?>assets/public/img/bg/3.jpg');">
            <div class="breadcrumb-content d-flex justify-content-center align-items-center"
                style="flex-direction: column;">
                <h2 class="title">Questions</h2>
                <nav aria-label="breadcrumb" class="mb-40">
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Question</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container container-1430">
            <div class="question-desc">
                <h4>Below are frequently asked questions, you may find the answer for yourself</h4>
                <p class="simple-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum nibh rutrum sit amet. Nulla convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu fringilla quis. Vivamus iaculis euismod dui.</p>

                <div class="question-collapse mt-50">
                    <div class="accordion" id="accordionExample">
                        <div>
                          <div id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne">
                                Mauris congue euismod purus at semper. Morbi et vulputate massa? <i class="fal fa-plus float-right"></i>
                              </button>
                            </h2>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                             <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Donec mattis finibus elit ut tristique? <i class="fal fa-plus float-right"></i>
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                             <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem

                            </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Vestibulum a lorem placerat, porttitor urna vel? <i class="fal fa-plus float-right"></i>
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                             <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- question end -->






<?php
include "views/public/include/pages_footer.php";
?>