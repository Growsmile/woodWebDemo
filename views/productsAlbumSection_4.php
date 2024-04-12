<section id="catalogGardenSection" class="py-5  bg-light">
        <div class="container px-4 px-lg-5 my-5 backgroundWhite ProductBackButtonPadding productBoxShaddow">
          <div class="col-12 ProductBackButtonPadding">
            <button id="catalogGardenBackButton">
              <a class="btn btnProductBack" href="#products"><span class="active spn2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
              </svg>
            </span></a>
            </button>
          </div>
          <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
              <!-- 600x700 -->
              
                <div id="carouselExampleControlsGarden" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
                    <div class="carousel-inner productPicSizeDiv">
                        <?php
                        $files = glob('Bildes/Darzam/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                        $i = 0;
                        foreach ($files as $file) {
                            $activeClass = $i == 0 ? ' active' : '';
                            echo "
                            <div class='carousel-item$activeClass'>
                            <img src='$file' class='productPicSize img-fluid d-block w-100'alt='Garden Picture $i'>
                            </div>
                            ";
                            $i++;
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControlsGarden" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControlsGarden" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
              <div class="col-md-6">
                  <h1 class="TranslateEng display-5 fw-bolder">Terrace, garden</h1>
                  <h1 class="TranslateLv display-5 fw-bolder">Terases, dārzi</h1>
                    <p class="TranslateEng lead">We carry out individual projects and the creation of garden and terrace objects of your wishes..</p>
                    <p class="TranslateLv lead">Veicam individuālu projektu un vēlmju dārza un terašu objektu izveidi..</p>
                  </div>
                </div>                   
              </div>
            </div>
          </div>
</section>