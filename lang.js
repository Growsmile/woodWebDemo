$(document).ready(function(){
    // mājas katalogs
    $("#latDrop").hide();
    $("#engDrop2").hide();
    $("#latFlagDrop").hide();  
    $(".TranslateLv").hide();
  
    $("#latDrop2").click(function(){
        //navigācija
        $("#latDrop").show();
        $("#engDrop2").show();
        $("#latFlagDrop").show();
        $("#engDrop").hide();
        $("#latDrop2").hide();
        $("#engFlagDrop").hide();

        // teksti
        $(".TranslateEng").hide();
        $(".TranslateLv").show();
    });

    $("#engDrop2").click(function(){
        //navigācija
        $("#latDrop").hide();
        $("#engDrop2").hide();
        $("#latFlagDrop").hide();
        $("#engDrop").show();
        $("#latDrop2").show();
        $("#engFlagDrop").show();
        
        // teksti
        $(".TranslateEng").show();
        $(".TranslateLv").hide();
    });
});