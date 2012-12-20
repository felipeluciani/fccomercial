<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

<footer class="footer aligncenter clearfix green-light-bg">
  
  <div class="alignleft dark-gray" id="footer_sitemap">
    <ul>
      <li class="title"> <a href=""> CLUBE</a> </li>
      <li> <a href=""> Estrutura </a> </li>
      <li> <a href=""> Diretoria </a> </li>
      <li> <a href=""> História </a> </li>
      <li> <a href=""> Patrocinadores </a> </li>
    </ul>
    <ul>
      <li class="title"> <a href=""> FUTEBOL </a> </li>
      <li> <a href=""> Profissional </a> </li>
      <li> <a href=""> Categoria de Base </a> </li>
      <li> <a href=""> Ficha Técnica </a> </li>
      
    </ul>
    <ul>
      <li class="title"> <a href=""> MULTIMÍDIA </a> </li>
      
    </ul>
    <ul>
      <li class="title"> <a href=""> NOTÍCIAS </a> </li>
      
    </ul>
    <ul>
      <li class="title"> <a href=""> CONTATOS </a> </li>
      
    </ul>
  </div>
  
  <div class="alignright" id="footer_tags"> Nuvens de tags / Plugin</div>
  
      <div id="footer_description" class="gray-light-bg"> 
          <span class="alignleft green"> Futebol Clube Comercial de Viçosa </span> 
          <span class="alignright green"> Produzido por Tend </span> 
      </div>
  
  </div>
  <!--! end of #container --> 
  
</footer>

<!-- Javascript at the bottom for fast page loading --> 

<!-- Grab Google CDN's jQuery. fall back to local if necessary --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/main.js") ?>

<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
       change the UA-XXXXX-X to be your site's ID --> 
<!-- WordPress.com does not allow Google Analytics code to be built into themes they host. 
       Add this section from HTML Boilerplate manually (html5-boilerplate/index.html), or use a Google Analytics WordPress Plugin--> 

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. --> 
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
<?php wp_footer(); ?>
</body></html>