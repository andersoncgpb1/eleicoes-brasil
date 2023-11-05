<?php
/*
Plugin Name: Apuracao Eleicoes Brasil
Plugin URI: https://github.com/andersoncgpb1/eleicoes-brasil
Description: Apuração das Eleições do Brasil
Version: 1.0
Author: Anderson Souza
Author URI: https://instagram.com/andersoncgpb
Text Domain: eleicoes-brasil
Domain Path: /languages
*/

// Add Shortcode
function apura_tse() {?>
<iframe src="hhttps://resultados.tse.jus.br/oficial/ele2022/544/dados-simplificados/br/br-c0001-e000544-r.json" height="700" width="100%" frameborder="0" scrolling="auto">You need an iframes capable browser to view this content.</iframe>
<?php 
}
add_shortcode( 'apuracao', 'apura_tse' );

function apura_twitter() {?>
<a class="twitter-timeline" href="https://twitter.com/search?q=elei%C3%A7%C3%B5es%20OR%20elei%C3%A7%C3%B5es2024%20OR%20eleicoes%20lang%3Apt&src=typed_query&f=top" data-widget-id="519666914453233664">Tweets sobre "eleições OR eleições2024 OR eleicoes lang:pt"</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<?php 
}
add_shortcode( 'twitter_eleicao', 'apura_twitter' );
