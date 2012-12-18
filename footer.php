<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

</div> <!--! end of #container -->
<footer class="footer aligncenter clearfix">
    <div class="footer_info alignleft">
        <iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=vi%C3%A7osa+alagoas&amp;aq=&amp;sll=-9.53333,-35.687113&amp;sspn=0.478753,0.727158&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Vi%C3%A7osa+-+Alagoas&amp;ll=-9.53304,-35.687027&amp;spn=0.478989,0.727158&amp;z=11&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=vi%C3%A7osa+alagoas&amp;aq=&amp;sll=-9.53333,-35.687113&amp;sspn=0.478753,0.727158&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Vi%C3%A7osa+-+Alagoas&amp;ll=-9.53304,-35.687027&amp;spn=0.478989,0.727158&amp;z=11" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>
    </div>
    <div class="alignright" id="footer_sidebar"> Tags e num sei que mais...</div>
    <div>
        <?php bloginfo('name'); ?> is proudly powered by
        <a href="http://wordpress.org/">WordPress</a>, and built using the <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.
        <br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
        and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
        <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
    </div>
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

</body>
</html>
