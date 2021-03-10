<?php
include "conexion.php";
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <title>PLANTILLA 1</title>
       <link rel="stylesheet" type="text/css" href="estilos.css">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
       <header class="headermj menu">
           <div class="logomj">
             <a href="#"><img class="logo-img" src="imagenes/northsystem.png" alt="north system"></a>
           </div>
          <nav class="navmj">
              <ul>
                  <li class="limj"><a href="#">home</a></li>
                  <li class="limj"><a href="#">products</a></li>
                  <li class="limj"><a href="#">services</a></li>
                  <li class="limj"><a href="#">contact</a></li>
                  <li class="limj"><a href="#">work with us</a></li>
              </ul>
          </nav>
          <div class="searchmj">
            <form method="" action="">
                <input class="seekermj" type="search" name="" placeholder="Buscar">
                <button class="button-seeker"><img src="imagenes/lupa.png" alt=""></button>
            </form>
          </div>
          <div class="carmj">
             <img class="car-imgmj" src="imagenes/carrito.png" alt="">
          </div>
          <img class="icon-menu" src="imagenes/menu.png">
       </header>
       <section id="wemj">
         <div class="div-wemj">
             <div>
                <h1>title of the page</h1>
                <p>Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Vestibulum ante ipsum primis
                    in faucibus orci luctus et ultrices posuere cubilia curae donec velit neque
                </p>
             </div>
         </div>
        
       </section>
       <section id="historymj">
         <h2>Our history</h2>
         <div class="container-hmj">
            <div class="div-text1hmj">
              <p>Our history dates back to the 2000s when we saw the opportunity and need to form a company, we created our first prototype watch.
               Our history dates back to the 2000s when we saw the opportunity and need to form a company, we created our first prototype watch.
               Our history dates back to the 2000s when we saw the opportunity and need to form a company, we created our first prototype watch.
              </p>
            </div>
            <div class="div-text2hmj">
              <p>Our history dates back to the 2000s when we saw the opportunity and need to form a company, we created our first prototype watch.
               Our history dates back to the 2000s when we saw the opportunity and need to form a company, we created our first prototype watch.
               Our history dates back to the 2000s when we saw the opportunity and need to form a company, we created our first prototype watch.
              </p>
            </div>
         </div>
       </section>
       <section id="services">
       <div class="contenedor">
			<div class="titular">
				<h2>OUR SERVICES</h2>
				<h3> Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet,
				consect adipiscing amet sit dolor</h3>
				<a class="boton" href="">Conoce más...</a>
			</div>
			<div id="service-uno" class="service service-shadow">
				<img src="imagenes/safe.png" alt="">
				<h4>Safe & Secure</h4>
				<p>Your content goes here. Edit or remove this text  inline or in the module content settings.
				You can also style every aspect of this content in the module design settings and every  apply custom CSS to this text
			     in the module Advanced settings.</p>
			     <a href="">CLICK HERE</a>
			</div>
		</div>
		<div class="contenedor contenedor-services-2">
			<div class="service">
				<img src="imagenes/safe.png" alt="">
				<h4>Safe & Secure</h4>
				<p>Your content goes here. Edit or remove this text  inline or in the module content settings.
				You can also style every aspect of this content in the module design settings and every  apply custom CSS to this text
			     in the module Advanced settings.</p>
			     <a href="">CLICK HERE</a>
			 </div>
			<div class="service" id="dos">
			    <img src="imagenes/safe.png" alt="">
				<h4>Safe & Secure</h4>
				<p>Your content goes here. Edit or remove this text  inline or in the module content settings.
				You can also style every aspect of this content in the module design settings and every  apply custom CSS to this text
			     in the module Advanced settings.</p>
			     <a href="">CLICK HERE</a>
			</div>
			<div class="service" id="service-cuatro">
				<img src="imagenes/safe.png" alt="">
				<h4>Safe & Secure</h4>
				<p>Your content goes here. Edit or remove this text  inline or in the module content settings.
				You can also style every aspect of this content in the module design settings and every  apply custom CSS to this text
			     in the module Advanced settings.</p>
			     <a href="">CLICK HERE</a>
			</div>

		</div>
       </section>
       <br><br><br>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script>
    $('.icon-menu').click(function(){
        var $slide = $('header nav');
        $slide.slideToggle();
		//$slide.toggleClass();
	})
</script>
<script>
    $(document).ready(function(){

  $(window).scroll(function(){
    scroll = $(window).scrollTop();

      if (scroll > 100) {
        $('header').css({"background":"rgba(150, 183, 164)"});
        $('header').css({"position":"fixed"});
        $('header').css({"width":"100%"});
        $('header').css({"top":"0"});
        $('header a').css({"color":"#000"});
        $('header a').css({"text-decoration":"none"});
        $('.logomj').css({"color":"#000"});
        $('header').css({"box-shadow":"rgba(0,0,0,0.22) 4px 1px 1px"});
        $('header').css({"z-index":"100"});
        $('header ul').css({"list-style":"none"});

      }else{
        $('header').css({"position":"absolute"});
        $('header').css({"background":"rgba(220, 241, 229)"});
        $('header').css({"width":"100%"});
        $('header').css({"top":"0"});
        $('header').css({"box-shadow":"0 0 0"});
        $('header a').css({"color":"#5A6DA3"});
        $('.logomj').css({"color":"#5A6DA3"});
        //$('..dropdown-menu').css({"color":"#000"});
      }
  })  

  })

</script>

    </body>
</html>