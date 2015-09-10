<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link href="/wp-content/themes/launchpress/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Work+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

    <title>Hope DeRossett</title>

    <?php wp_head(); ?>
    
    <!-- Modal Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script>
    $(function(){

    var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

      $('a[data-modal-id]').click(function(e) {
        e.preventDefault();
        $("body").append(appendthis);
        $(".modal-overlay").fadeTo(500, 0.7);
        //$(".js-modalbox").fadeIn(500);
        var modalBox = $(this).attr('data-modal-id');
        $('#'+modalBox).fadeIn($(this).data());
      });  
      
      
    $(".js-modal-close, .modal-overlay").click(function() {
      $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
      });
    });
     
    $(window).resize(function() {
      $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 4,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 4
      });
    });
     
    $(window).resize();
     
    });
    </script>
    <!--END Modal Script -->
  </head>

  <body <?php body_class(); ?>>

    <!-- <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="navbar-collapse collapse">

         <a href="#">Email</a>
         <a href="#">Resumé</a>
         <a href="#">Instagram</a>
         <a href="#">Twitter</a>

        </div>

      </div>
    </div> -->
