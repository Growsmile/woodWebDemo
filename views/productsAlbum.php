<div id="products">
<div class="album py-5 bg-light" id="productsSection">
        <br>
        <div class="container">
          <div class="row">
            <a id="productsHouseCatalogToggle" href="#catalogHouseSection" class="productsAlbum col-md-6">
              <div class="card cardAlbum mb-6 shadow-sm">
                <img class="productsPhoto img-fluid" src="img/albumCatalog_1.png" width="330px" height="300px" lass="img-fluid" alt="Responsive catalog image">
                <div class="card-body">
                  <h2 class="TranslateEng text-dark text-center">Wooden frame house</h2>
                  <h2 class="TranslateLv text-dark text-center">Koka karkasa mājas</h2>
                    <p class="TranslateEng text-dark text-center">Wooden frame houses according to an individual project.</p>
                    <p class="TranslateLv text-dark text-center">Koka karkasa mājas pēc individuāla projekta.</p>
                </div>
              </div>
            </a>


            <a id="productsRoofCatalogToggle" href="#catalogRoofSection" class="productsAlbum col-md-6">
              <div class="card cardAlbum mb-6 shadow-sm">
                <img class="productsPhoto img-fluid" src="img/albumCatalog_2.png" width="330px" height="300px" lass="img-fluid" alt="Responsive catalog image">
                <div class="card-body">
                  <h2 class="TranslateEng text-dark text-center">Roof</h2>
                  <h2 class="TranslateLv text-dark text-center">Jumti</h2>
                    <p class="TranslateEng text-dark text-center">Roof replacement, reconstruction.</p>
                    <p class="TranslateLv text-dark text-center">Jumta maiņa, rekonstrukcija.</p>
                </div>
              </div>
            </a>
          
            <a id="productsSaunaCatalogToggle" href="#catalogSaunaSection" class="productsAlbum col-md-6">
              <div class="card cardAlbum mb-6 shadow-sm">
                <img class="productsPhoto img-fluid" src="img/albumCatalog_3.png" width="330px" height="300px" lass="img-fluid" alt="Responsive catalog image">
                <div class="card-body">
                  <h2 class="TranslateEng text-dark text-center">Sauna</h2>
                  <h2 class="TranslateLv text-dark text-center">Pirtis</h2>
                    <p class="TranslateEng text-dark text-center">Wooden frame saunas with interior according to an individual project.</p>
                    <p class="TranslateLv text-dark text-center">Koka karkasa pirtis ar interjeru izveidi pēc individuāla projekta.</p>
                </div>
              </div>
            </a>
          
            <a id="productsGardenCatalogToggle" href="#catalogGardenSection" class="productsAlbum col-md-6">
              <div class="card cardAlbum mb-6 shadow-sm">
                <img class="productsPhoto img-fluid" src="img/albumCatalog_4.png" width="330px" height="300px" lass="img-fluid" alt="Responsive catalog image">
                <div class="card-body">
                  <h2 class="TranslateEng text-dark text-center">Terrace, garden.</h2>
                  <h2 class="TranslateLv text-dark text-center">Terases, dārzi.</h2>
                    <p class="TranslateEng text-dark text-center">Unique products for your terrace and garden.</p>
                    <p class="TranslateLv text-dark text-center">Unikāli produkti jūsu terasei un dārzam.</p>
                </div>
              </div>
            </a>


          </div>
        </div>
      </div>

      <script>
$(document).ready(function(){
  // mājas katalogs
  $("#catalogHouseSection").hide();

  $("#productsHouseCatalogToggle").click(function(){
      $("#catalogHouseSection").show();
      $("#productsSection").hide();
  });
  $("#catalogHouseBackButton").click(function(){
      $("#catalogHouseSection").hide();
      $("#productsSection").show();
  });

  // jumta katalogs
  $("#catalogRoofSection").hide();

  $("#productsRoofCatalogToggle").click(function(){
      $("#catalogRoofSection").show();
      $("#productsSection").hide();
  });
  $("#catalogRoofBackButton").click(function(){
      $("#catalogRoofSection").hide();
      $("#productsSection").show();
  }); 
  
  // Sauna katalogs
  $("#catalogSaunaSection").hide();

  $("#productsSaunaCatalogToggle").click(function(){
      $("#catalogSaunaSection").show();
      $("#productsSection").hide();
  });
  $("#catalogSaunaBackButton").click(function(){
      $("#catalogSaunaSection").hide();
      $("#productsSection").show();
  });  

  // Garden katalogs
  $("#catalogGardenSection").hide();

  $("#productsGardenCatalogToggle").click(function(){
      $("#catalogGardenSection").show();
      $("#productsSection").hide();
  });
  $("#catalogGardenBackButton").click(function(){
      $("#catalogGardenSection").hide();
      $("#productsSection").show();
  });    
  
});
// function productsCatalogToggle() {
//   var houseSection = document.getElementById("catalogHouseSection");
//   var productsCatalog = document.getElementById("products");
//   if (houseSection.style.display === "none") {
//     houseSection.style.display = "block";
//   } else {
//     houseSection.style.display = "none";
//   }
// }
</script> 