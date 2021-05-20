 $(function(){

    $('.navbar-toggler').bind('click', function () {
        if($("div.navbar-toggler").attr("aria-expanded") == "true"){
            $('div.navbar-toggler').html('<i class="bi bi-arrow-bar-up"></i>');
        }
        else{
            $('div.navbar-toggler').html('<i class="bi bi-arrow-bar-down"></i>');
        }
      })
});