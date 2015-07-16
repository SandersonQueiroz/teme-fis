<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- #main -->




        <footer class="page-footer blue darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
            

	</div><!-- .container -->

	
	
	
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.font-accessibility.min.js"></script>
 
	
		<script>
	$(function(){
		/* Basic demo */
		$('#font-setting-basic').easyView({
			container: '#basic'
		});

		/* Custom buttons */
		$('#font-setting-buttons').easyView({
			container: '#main',
			increaseSelector: '.increase-me',
			decreaseSelector: '.decrease-me',
			normalSelector: '.reset-me',
			contrastSelector: '.change-me'
		});

	});
	</script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/materialize.js"></script>

	  <script type="text/javascript">
		  $( document ).ready(function(){
		  	$(".button-collapse").sideNav();
			$('.slider').slider({full_width: true});
			  $('slides li').parallax();
			  
		  });
	  </script>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/retina.js"></script>
			
					
</body>
</html>
