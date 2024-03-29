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
.tabs .indicator{background:none !important;}
 .caption h3 {
  font-weight: 100;
}

.z-depth-3, .img-link:hover, .effect-honey:hover  {
  box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
}
.effect-honey:hover {
  -webkit-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
  z-index: 500;
}
.effect-honey {
 
  -webkit-transition: box-shadow 0.2s ease-out, -webkit-transform 0.2s ease-out;
  transition: box-shadow 0.2s ease-out, transform 0.2s ease-out;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
.grid figure {
  position: relative;
  float: left;
  overflow: hidden;
  margin: 10px 1%;
  width: 100%;
  background: #3085a3;
  text-align: center;
  cursor: pointer;
}
figure {
  margin: 1em 40px;
}
@media only screen and (min-width: 992px){
.hero {
 
}
}
.hero {
  padding-top: 40px;
  
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 /* background-image: url('http://makoframework.com/assets/img/home.jpg'); */
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
.collection {border:none !important;}
.margim-top-boton{ margin-bottom:40px; margin-top:40px;}
 
 :active { 
    background-color: fdd406;
}
</style>
<div class="parallax-container slider"><!-- Slide prioncipal -->
     <ul class="slides">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.jpg"> <!-- random image -->
        <div class="caption center-align"></div>
      </li>
      
      </li>
    </ul>
</div><!-- FIM Slide prioncipal -->

<div class="section no-pad-bot">
    <div class="row">
      <div class="col s12 white margem">
	  
<div class="col s12 m12 l9"><!-- Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->
<div class="row"><!-- Inicio linha2 -->  

<div class="col s12 m6 l6"><!-- Bloco de 3 Materias Principais - Primeira coluna -->
     <!-- loop da categoria FIS -->
      
      <div class="card">
      <div class="slider" style=" height:377px;  margin: 0.5rem 0 1rem 0;">
        <ul class="slides" style=" height:340px; margin: 0.5rem 0 1rem 0;">
      <?php 
        $recent = new WP_Query("category_name=Destaque&showposts=3"); 
        while($recent->have_posts()) : $recent->the_post();
      ?> 
               
                
       <li class="effect-honey">
         <?php the_post_thumbnail('recent-posts',array('class'=>'img-responsive')); ?>
        <div class="caption center-align">
          <h3><?php the_title(); ?></h3>
          
        </div>
      </li>
      
      
   
      <?php endwhile; // Fim :: loop da categoria FIS ?>

     </ul> 
  </div> </div>
  </div><!-- FIM :: Bloco de 3 Materias Principais - Primeira coluna -->

 
<div class="col s12 m6 l6"><!-- Cards Coluna Principal -->
  <!-- faco o loop so da categoria 20 e trago 1 so post -->
  
 
     <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://www.newsrondonia.com.br/imagensNoticias/image/logo_fiesbrasil_.jpg" style="height: 305px;">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Veja mais</span>
     
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Ultimas Notícias Fies<i class="material-icons right">X</i></span>
            <ul class="collection">  
        
       <?php 
        $recent = new WP_Query("category_name=FIS&showposts=5"); 
        while($recent->have_posts()) : $recent->the_post();
        ?> 
             <li class="collection-item avatar selected">
                 <?php the_post_thumbnail('thumbnail', array('class' => 'circle')); ?>
                   <span class="email-title"> <?php the_title(); ?></span>
                  <p class="truncate grey-text ultra-small">Hay Joe, we have next project for this summer.</p>
                     
                    </li>
                   
                    <?php endwhile; ?> </ul>
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
        <div class="card-content ">
          <span class="card-title">CALENDÁRIO<i class="mdi-navigation-more-vert right"></i></span>
        </div>
      <?php if ( dynamic_sidebar('calendario_fis') ) : else : endif; ?>
      
      
      </div>
</div><!-- Cards Coluna Principal -->
</div><!-- row -->

</div><!-- FIM Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->







 <div class="col s12 m12 l3 "><!-- Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->
 
<div class="col s12 m6 l12"><!-- Cards Coluna Principal -->
 <div class="card">
       <div class="card-content" style=" padding-right: 15px; ">
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

 <div class="col offset-l1 l10 s12 white">
<div id="hero" class="hero parallax-effect ">
		 
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
                
                
                
           
                
                  <div class="row"><span class="white-text"><h4 class="white-text darken-2 light center">ENSINO</h4><br></span>
                     <div class="col s12">
                        <ul class="tabs">
                           <li class="tab col s3"><a class="active" href="#graduacao"><b>Graduação</b></a></li>
                           <li class="tab col s3"><a  href="#posgraduacao"><b>Pós Graduação</b></a></li>
                           <li class="tab col s3 disabled"><a href="#tecnologo"><b>Tecnologo</b></a></li>
                        </ul>
                     </div>
                      <div class="col s12 z-depth-1">
                        <div id="graduacao" class="col s12 amarelo ">
                 <?php 
						// imprimir todos os elementos da graduação
				  foreach ($cursos as $curso):
					 if($curso['id'] == 1): ?>
						   <div class="col s12 m6 l4 margim-top-boton">
                                 <div class="valign-wrapper">
                                          <span class="<?php echo $curso['icon']; ?>"> </span>
                                          <span class="title-cursos"><?php echo $curso['nome']; ?></span>
                                  </div>
                           </div>
                 <?php	endif; endforeach; ?>
                       </div> <!---graduação--->
                        
                      <div id="posgraduacao" class="col s12 amarelo ">
                 <?php 
						// imprimir todos os elementos da graduação
				  foreach ($cursos as $curso):
					 if($curso['id'] == 2): ?>
						   <div class="col s12 m6 l4 margim-top-boton">
                                 <div class="valign-wrapper">
                                          <span class="<?php echo $curso['icon']; ?>"> </span>
                                          <span class="title-cursos"><?php echo $curso['nome']; ?></span>
                                  </div>
                           </div>
                 <?php	endif; endforeach; ?>
                       </div> <!---posgraduacao--->
                       <div id="tecnologo" class="col s12 amarelo ">
                 <?php 
						// imprimir todos os elementos da graduação
				  foreach ($cursos as $curso):
					 if($curso['id'] == 3): ?>
						   <div class="col s12 m6 l4 margim-top-boton">
                                 <div class="valign-wrapper">
                                          <span class="<?php echo $curso['icon']; ?>"> </span>
                                          <span class="title-cursos"><?php echo $curso['nome']; ?></span>
                                  </div>
                           </div>
                 <?php	endif; endforeach; ?>
                       </div> <!---tecnologo--->
                 </div><!---row--->
             </div> <!---fim da grade dos cursos --->
                
			 
		</div>
	</div>
    
  </div><!-- Fim linha2 --> 
  
    
 
 
<div class="row red-fis margem"><!-- Inicio linha3 -->

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
