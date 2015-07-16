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


<div class="col s12 m12 l9" style="border:1px solid #000;"><!-- Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->
<div class="row"><!-- Inicio linha2 -->  

<div class="col s12 m6 l6"><!-- Bloco de 3 Materias Principais - Primeira coluna -->
     <!-- loop da categoria FIS -->
      <div class="slider">
        <ul class="slides">
      <?php 
        $recent = new WP_Query("category_name=Destaque&showposts=3"); 
        while($recent->have_posts()) : $recent->the_post();
      ?> 
      
       <li>
         <?php echo get_the_post_thumbnail(); ?>
        <div class="caption center-align">
          <h3><?php the_title(); ?></h3>
          
        </div>
      </li>
      
      
   
      <?php endwhile; // Fim :: loop da categoria FIS ?>

     </ul>
  </div>
  </div><!-- FIM :: Bloco de 3 Materias Principais - Primeira coluna -->

 

<div class="col s12 m6 l6"><!-- Cards Coluna Principal -->
  <!-- faco o loop so da categoria 20 e trago 1 so post -->
 <div class="card red">
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Ultimas Notícias<i class="mdi-navigation-more-vert right"></i></span>
        </div>
        
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
                    
  
  
      
       
      <?php endwhile; // Fim :: loop da categoria FIS ?>


  </ul>  

       

      <a class="right" href="#">Todas as Notícias >>.</a>

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







 <div class="col s12 m12 l3 " style="border:1px solid #000;"><!-- Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->
 
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


<div class="row"><!-- Inicio linha2 -->
</div><!-- Fim linha2 -->
<div id="hero" class="hero parallax-effect ">
		<div class="container">
				<div class="hero-content animated bounceInDown slow ">
				
                
                  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Test 1</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab col s3"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">Test 1</div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
  </div>
                
                
			</div>
		</div>
	</div>
    
   
  
    
 
 
<div class="row white margem"><!-- Inicio linha3 -->
<div class="row white">



  <h4>Nossos Cursos</h4>

    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#graduacao"><b>Graduação</b></a></li>
        <li class="tab col s3"><a  href="#posgraduacao"><b>Pós Graduação</b></a></li>
        <li class="tab col s3 disabled"><a href="#tecnologo"><b>Tecnologo</b></a></li>
      </ul>
    </div>



    <div id="graduacao" class="col s12 yellow ">
      <div class="col s12 m6 l4">
      <ul class="collection">
        <li class="collection-item avatar">
          <div class="valign-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-png/adm.png" alt="" class="circle">
  
          <span class="title text-">Administração de Empresas</span>
         </div>
        </li>
        <li class="collection-item avatar">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-png/direito.png" alt="" class="circle">
          <span class="title"><strong>Bacharel em Direito</strong></span>
         
        </li>
        <li class="collection-item avatar">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-png/contab.png" alt="" class="circle">
          <span class="title"><strong>Bacharel em Contabilidade</strong></span>
         
        </li>
        <li class="collection-item avatar">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-png/enferm.png" alt="" class="circle">
          <span class="title"><strong>Bacharel em Enfermagem</strong></span>
         
        </li>
      </ul>
    </div> 

<div class="col s12 m6 l4">
      <ul class="collection">
        <li class="collection-item avatar">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-png/farmac.png" alt="" class="circle">
          <span class="title"><strong>Bacharel em Farmácia</strong></span>
         
        </li>
        <li class="collection-item avatar">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-png/fisio.png" alt="" class="circle">
          <span class="title"><strong>Bacharel em Fisioterapia</strong></span>
         
        </li>
        <li class="collection-item avatar">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-png/seguran.png" alt="" class="circle">
          <span class="title"><strong>Tecnologo em Segurança do Trabalho</strong></span>
         
        </li>
        <li class="collection-item avatar">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-png/logis.png" alt="" class="circle">
          <span class="title"><strong>Tecnologo em Logistica</strong></span>
         
        </li>

      </ul>
</div>

<div class="col s12 m6 l4">
      <ul class="collection">
        <li class="collection-item avatar">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-png/redes.png" alt="" class="circle">
          <span class="title"><strong>Tecnologo em Redes de Computadores</strong></span>
         
        </li>

      </ul>

</div>
    </div>

    <div id="posgraduacao" class="col s12">
      <div class="col s12 m6 l6">
      <ul class="collection">
        <li class="collection-item avatar">
          <img src="images/yuna.jpg" alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle">folder</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle green">insert_chart</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle red">play_arrow</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
      </ul>

</div> <div class="col s12 m6 l6">
      <ul class="collection">
        <li class="collection-item avatar">
          <img src="images/yuna.jpg" alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle">folder</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle green">insert_chart</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle red">play_arrow</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
      </ul>

</div>

    </div>
    <div id="tecnologo" class="col s12">

<div class="col s12 m6 l6">
      <ul class="collection">
        <li class="collection-item avatar">
          <img src="images/yuna.jpg" alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle">folder</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle green">insert_chart</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle red">play_arrow</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
      </ul>

</div> <div class="col s12 m6 l6">
      <ul class="collection">
        <li class="collection-item avatar">
          <img src="images/yuna.jpg" alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle">folder</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle green">insert_chart</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle red">play_arrow</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
      </ul>

</div>

    </div>
  

</div><!-- FIM linha3 -->
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
