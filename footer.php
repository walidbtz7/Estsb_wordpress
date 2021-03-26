<?php
$estsb_logo = get_template_directory_uri() . '/assets/images/logo_estsb.jpg';
?>
<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="text_footer">
                <h2><?php bloginfo('name'); ?></h2>
                <p>
                    <b>Adresse : </b><?php echo steduty_get_option('address_text'); ?><br>
                    <b>Téléphone : 05 23 34 44 47 / 05 23 34 44 48 </b><br>
                    <b>Fax : </b><?php echo steduty_get_option('fax_text'); ?>
                </p>
            </div>
            <div class="col-sm-3" id="text_footer">
                <h2>NAVIGATION</h2>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Mot du directeur</a></li>
                </ul>
            </div>
            <div class="col-sm-3" id="text_footer">
                <h2>FILIÈRES DUT</h2>
                <ul>
                    <li><a href="#">Génie Informatique</a></li>
                    <li><a href="#">Techniques de Management</a></li>
                    <li><a href="#">Génie Agro-Environnement</a></li>
                </ul>
            </div>
            <div class="col-sm-3" id="text_footer">
                <h2>MAP</h2>
                <div id='map'
                     style='width: <?php echo steduty_get_option('width_map_api'); ?>; height: <?php echo steduty_get_option('height_map_api'); ?>;'></div>
                <script>
                    mapboxgl.accessToken = 'pk.eyJ1IjoiemFrYXJpYXppa28iLCJhIjoiY2tieGpkY2IzMDRxcTJxbXJrcnVtcm11ZyJ9.e6-Xpc0xkXcL9vrBIhVWpw';
                    var map = new mapboxgl.Map({
                        container: 'map',
                        style: 'mapbox://styles/mapbox/streets-v11',
                        center: [<?php echo steduty_get_option('long_map_api');?>,<?php echo steduty_get_option('lat_map_api');?>],
                        zoom: <?php echo steduty_get_option('zoom_map_api');?>
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-copy">
        <p class="copy">Copyright © <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All Rights Reserved. </p>
        <p class="copy-ilovewp"><span class="theme-credit">Powered by estsb</a></span></p>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
