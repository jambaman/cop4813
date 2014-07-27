<!DOCTYPE html>  
<html lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script type="text/javascript">
  
   var CC_Carousel = { 
       nextImage : function(carousel, interval){ 
           var next; 
         
           if($(carousel).find('.cc-carousel-active').length == 0){ 
               next = $(carousel).find('> li').first(); 
               next.show(); 
           } else { 
               var previous = $(carousel).find('.cc-carousel-active'); 
               previous.removeClass('cc-carousel-active'); 
             
               next = previous.next().length == 1 ? previous.next() : 
                   $(carousel).find('> li').first(); 

               previous.fadeOut(); 
               next.fadeIn(); 
           } 
         
           next.addClass('cc-carousel-active'); 
         
           setTimeout(function(){ 
               CC_Carousel.nextImage(carousel, interval); 
           }, interval); 
       } 
   }; 

   $(document).ready(function(){ 
       $('.cc-carousel').each(function(){ 
     
           var interval = $(this).data('interval'); 
           CC_Carousel.nextImage(this, interval); 

       }); 
   });
   </script>
    <link href="3col.css" rel="stylesheet" > 
</head>

<body>
<div id="pageWrap" class="clearfix">
<div id="header">
  <h1>Featured Artists</h1>
  
  
   <ul class="cc-carousel" data-interval="6000"> 
       <li><img src="img/kings.jpg" alt=""/></a></li> 
       <li><img src="img/donkey.jpg" alt=""/></li> 
       <li><img src="img/raggatip.jpg" alt=""/></li> 
       <li><img src="img/rave.jpg" alt=""/></li> 
	   <li><img src="img/beasties.jpg" alt=""/></li>
   </ul>
    

</div>
<div id="topBox" class="float">

 <nav>
   <ul>
     <li><a href="#">About Us</a>
      <ul>
        <li><a href="#">Group 4 Crew</a></li>
        <li><a href="#">Our Project</a></li>
        </ul>
        </li>
     <li><a href="#">Contact</a></li>
     <li><a href="#">Login</a></li>
    </ul>
     </nav>
  <div id=""
</div><!-- /#topBox -->

<div id="columns" class="float">
<div id="col1" class="float">
  <?php include 'PHP/register.php';?>
</div>

<!-- /#col1 -->

<div id="col2" class="float" role="main">
  <h1>Content Column</h1>
 
  <section class="clearfix">
    <h1>Main Content</h1>
    <section>
      <h2>#col2</h2>
      Search? or html5 audio
    </section>
  
<div id="intro" class="float">
  <section>
    <h3>#intro</h3>
  </section>
</div><!-- /#intro -->

<div id="main" class="float">
  <article role="article">
    <h3>#main</h3>
    Main listing of tracks
    </p>
    
  </article>
</div><!-- /#maincontent -->

<div id="outro" class="float">
  <section>
    
    
  </section>
</div><!-- /#outro -->

</section>
</div><!-- /#col2 -->

<div id="col3" class="float">
  <h1>Right Column</h1>
  <aside role="complementary">
   
    <p>The shopping cart with the selected items can go here
  </aside>
</div><!-- /#col3 -->

</div><!-- /#columns -->

<div id="botBox" class="float">
  <h1>Complementary Content</h1>
  <section>
    <h2>if needed</h2>
  </section>
</div><!-- /#botBox -->

<div id="footer" class="float">
 
    <h2>Copyright 2014</h2>
	<p>Internet Programming COP4813</p>
	<p>Group 4</p>
   
      
  </footer>
</div><!-- /#footer -->

</div>

</body>
</html>
