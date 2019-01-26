	<!--Begin of footer-->
 <div class="push"></div>
		</div><!--row-->

	 <!--container-->
</div>
</div>
	</div>
	

	
	<div class="footer"> 
				<div class="company">
					Copyright &copy; <?php echo date('Y'); ?> <?php echo (string) $ost->company ?: 'o2bkids.com'; ?> - All rights reserved.
						</a>-->
				</div>
	</div>
	
	
						
	
<div id="overlay"></div>
<div id="loading">
    <h4><?php echo __('Please Wait!');?></h4>
    <p><?php echo __('Please wait... it will take a second!');?></p>
</div>
<?php
if (($lang = Internationalization::getCurrentLanguage()) && $lang != 'en_US') { ?>
    <script type="text/javascript" src="ajax.php/i18n/<?php
        echo $lang; ?>/js"></script>
<?php } ?>
<script type="text/javascript">
    getConfig().resolve(<?php
        include INCLUDE_DIR . 'ajax.config.php';
        $api = new ConfigAjaxAPI();
        print $api->client(false);
    ?>);
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->



</body>
</html>