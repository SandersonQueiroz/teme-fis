<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<style>
@media only screen and (min-width: 992px){
.hero {
  height: 400px;
}
}
.hero {
  height: 500px;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-image: url('http://makoframework.com/assets/img/home.jpg');
  overflow: hidden;
}
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.scrollpoint.active {
  opacity: 1 \0;
}
.slider .slides li .caption {
  color: #fff;
  /* background-color: #000; */
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.83) 100%);
  position: absolute;
  top: 0%;
  left: 0px;
  width: 100%;
  opacity: 0;
}

.margim-top-boton{ margin-bottom:15px; margin-top:15px;}
</style>
<div class="slider"><!-- Slide prioncipal -->
     <ul class="slides">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.jpg"> <!-- random image -->
        <div class="caption center-align"></div>
      </li>
      <!-- <li>
        <img src="http://lorempixel.com/580/250/nature/2"> 
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> 
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> 
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div> -->
      </li>
    </ul>
</div><!-- FIM Slide prioncipal -->

<div class="section no-pad-bot" style="margin-top: -5%;position: relative;z-index: 10;/* padding-top: 15px; */">
    <div class="row">
      <div class="col offset-l1 l10 s12 white z-depth-1">
	  <span class="grey-text"><h4 class="grey-text darken-2 light center">Kiosk Browser Lockdown</h4><br></span>
<div class="col s12 m12 l9"><!-- Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->
<div class="row"><!-- Inicio linha2 -->  

<div class="col s12 m6 l6"><!-- Bloco de 3 Materias Principais - Primeira coluna -->
     <!-- loop da categoria FIS -->
     <div class="card" style="padding-bottom: 6px;">
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Ultimas Notícias<i class="mdi-navigation-more-vert right"></i></span>
        </div>
        
      <div class="slider" style="  margin: 0.5rem 0 1rem 0;">
        <ul class="slides">
      <?php 
        $recent = new WP_Query("category_name=Destaque&showposts=3"); 
        while($recent->have_posts()) : $recent->the_post();
      ?> 
               
                
       <li class="effect-honey">
         <?php the_post_thumbnail(); ?>
        <div class="caption center-align">
          <h3><?php the_title(); ?></h3>
          
        </div>
      </li>
      
      
   
      <?php endwhile; // Fim :: loop da categoria FIS ?>

     </ul><br><br>
  </div></div>
  </div><!-- FIM :: Bloco de 3 Materias Principais - Primeira coluna -->

 

<div class="col s12 m6 l6"><!-- Cards Coluna Principal -->
  <!-- faco o loop so da categoria 20 e trago 1 so post -->
   <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://www.newsrondonia.com.br/imagensNoticias/image/logo_fiesbrasil_.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
        

</div><!-- Cards Coluna Principal -->



</div><!-- row -->
<div class="row"><!-- Inicio linha2 -->

<div class="col s12 m6 l6"><!-- Bloco de 3 Materias Principais - Primeira coluna -->
  <div class="card">
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">TV FIS<i class="mdi-navigation-more-vert right"></i></span>
        </div>
         <?php if ( dynamic_sidebar('tv_fis') ) : else : endif; ?>
      </div>
</div><!-- FIM :: Bloco de 3 Materias Principais - Primeira coluna -->


<div class="col s12 m6 l6"><!-- Cards Coluna Principal -->
   <div class="card">
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">CALENDÁRIO<i class="mdi-navigation-more-vert right"></i></span>
        </div>
      <?php if ( dynamic_sidebar('calendario_fis') ) : else : endif; ?>
      
      
      </div>
</div><!-- Cards Coluna Principal -->
</div><!-- row -->

</div><!-- FIM Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->







 <div class="col s12 m12 l3 "><!-- Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->
 
<div class="col s12 m6 l12"><!-- Cards Coluna Principal -->
 <div class="card">
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Portal Acadêmico<i class="mdi-navigation-more-vert right"></i></span>
        </div>
        <form class="col s12"  id="form2" name="form2" action="http://www8.qualinfonet.com.br/fis/acadweb.autentica.php" method="post">       
          <div class="row">
            <div class="input-field col s12">
              <input id="usuario" type="text" class="validate">              
              <label for="password">Usuário</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="email">Senha</label>
            </div>
          </div>
          <div class="row">
            <p>
              <input class="text-left" value="aluno" name="group1" type="radio" id="test1" />
              <label for="test1">Aluno</label>
            
              <input name="group1" value="professor" type="radio" id="test2" />
              <label for="test2">Professor</label>
           
              <input class="text-rigth" name="group1" type="radio" id="test3" />
              <label for="test3">Gestor</label>
              <p>
              <button type="submit" class="waves-effect waves-light btn right">Entrar</button>
              </p>
            </p>
          </div>
        </form>
      </div>
 
</div><!-- Cards Coluna Principal -->


<div class="col s12 m6 l12"><!-- Cards Coluna Principal -->
  <div class="departamentos card">
          <div class="card-content-fis card-content">
          <span class="card-title activator grey-text text-darken-4">Departamento<i class="mdi-navigation-more-vert right"></i></span>
        </div>
        
        <div class="collection">
        <a href="#!" class="opaco collection-item">Biblioteca</a>
        <a href="#!" class="opaco collection-item">NUPEX</a>
        <a href="#!" class="opaco collection-item">Escola Fisio</a>
        <a href="#!" class="opaco collection-item">PROUNE</a>
      </div>

  </div>
</div><!-- Cards Coluna Principal -->
 
 </div>

 
 
 </div>
 </div>
 </div>
 

<div class="row"><!-- Inicio linha2 -->
</div><!-- Fim linha2 -->
<div id="hero" class="hero parallax-effect ">
		<div class="container">
				<div class="hero-content animated bounceInDown slow ">
				
               <?php 
			   $tipo_curso = array(
			    array("Graduação","1"),
			    array("Pos Graduação","2"),
			    array("Tecnologo","3")
			   );
			  
		                       // chave_curso |           nome do curso                | icone do curso //
           
         $cursos = array( array( "id" => "1", "nome" => "Administração de Empresas", "icon" => "fis-farmacia"),
						  array( "id" => "1", "nome" => "Bacharel em Direito",       "icon" => "fis-farmacia"),
						  array( "id" => "1", "nome" => "Bacharel em Contabilidade", "icon" => "fis-farmacia"),
						  array( "id" => "1", "nome" => "Bacharel em Enfermagem",    "icon" => "fis-farmacia"),
						  array( "id" => "1", "nome" => "Administração de Empresas", "icon" => "fis-farmacia"),
						  
						  array( "id" => "2", "nome" => "Bacharel em Farmácia",       "icon" => "fis-farmacia"),
						  array( "id" => "2", "nome" => "Bacharel em Fisioterapia",   "icon" => "fis-farmacia"),
						  array( "id" => "2", "nome" => "Tecnologo em Segurança do Trabalho", "icon" => "fis-farmacia"),
						  
						  array( "id" => "3", "nome" => "Tecnologo em Redes de Computadores", "icon" => "fis-farmacia"),
						  array( "id" => "3", "nome" => "Tecnologo em Redes",        "icon" => "fis-farmacia")	 	  
											 
					  );
						
			   ?> 
                
                
                
               
                
                  <div class="row"><span class="white-text"><h4 class="white-text darken-2 light center">Kiosk Browser Lockdown</h4><br></span>
                     <div class="col s12">
                        <ul class="tabs">
                           <li class="tab col s3"><a class="active" href="#graduacao"><b>Graduação</b></a></li>
                           <li class="tab col s3"><a  href="#posgraduacao"><b>Pós Graduação</b></a></li>
                           <li class="tab col s3 disabled"><a href="#tecnologo"><b>Tecnologo</b></a></li>
                        </ul>
                     </div>
                      <div class="col s12">
                        <div id="graduacao" class="col s12 yellow ">
                 <?php 
						// imprimir todos os elementos da graduação
				  foreach ($cursos as $curso):
					 if($curso['id'] == 1): ?>
						   <div class="col s12 m6 l4 margim-top-boton">
                                 <div class="valign-wrapper">
                                          <span class="<?php echo $curso['icon']; ?>"> </span>
                                          <span class="title text-"><?php echo $curso['nome']; ?></span>
                                  </div>
                           </div>
                 <?php	endif; endforeach; ?>
                       </div> <!---graduação--->
                        
                      <div id="posgraduacao" class="col s12 yellow ">
                 <?php 
						// imprimir todos os elementos da graduação
				  foreach ($cursos as $curso):
					 if($curso['id'] == 2): ?>
						   <div class="col s12 m6 l4 margim-top-boton">
                                 <div class="valign-wrapper">
                                          <span class="<?php echo $curso['icon']; ?>"> </span>
                                          <span class="title text-"><?php echo $curso['nome']; ?></span>
                                  </div>
                           </div>
                 <?php	endif; endforeach; ?>
                       </div> <!---posgraduacao--->
                       <div id="tecnologo" class="col s12 yellow ">
                 <?php 
						// imprimir todos os elementos da graduação
				  foreach ($cursos as $curso):
					 if($curso['id'] == 3): ?>
						   <div class="col s12 m6 l4 margim-top-boton">
                                 <div class="valign-wrapper">
                                          <span class="<?php echo $curso['icon']; ?>"> </span>
                                          <span class="title text-"><?php echo $curso['nome']; ?></span>
                                  </div>
                           </div>
                 <?php	endif; endforeach; ?>
                       </div> <!---tecnologo--->
                 </div><!---row--->
             </div> <!---fim da grade dos cursos --->
                
			</div>
		</div>
	</div>
    
   
  
    
 
 
<div class="row white margem"><!-- Inicio linha3 -->

<div class="row"><!-- Inicio linha4 -->

<div class="col s12 m6 l4">

<div class="card">
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">Instagran #FIS<i class="mdi-navigation-more-vert right"></i></span>
        </div>
          <div class="video-container no-controls">
          <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0;autohide=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

</div>


<div class="col s12 m6 l4">

<div class="card">
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">Facebook #FISEMAIS<i class="mdi-navigation-more-vert right"></i></span>
        </div>
          <div class="video-container no-controls">
          <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0;autohide=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

</div>


<div class="col s12 m6 l4">

<div class="card">
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">Instagran #FIS<i class="mdi-navigation-more-vert right"></i></span>
        </div>
          <div class="video-container no-controls">
          <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0;autohide=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

</div>

</div><!-- FIM linha4 -->
            


<?php
get_footer();
