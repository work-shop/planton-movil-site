<?php $home_id = 8; ?>
<?php $instagram = str_replace( '@', '', get_field('instagram', $home_id ) ); ?>
<?php $facebook = str_replace( '@', '', get_field('facebook', $home_id ) ); ?>

<footer id="footer" class="block">
	<div class="container-fluid">
		<div class="row mb1">
			<div class="col-sm-8">
                <?php wp_nav_menu( array('menu' => 'Footer Navigation' )); ?>
            </div>
            <div class="social col-sm-4">
                <a href="https://www.facebook.com/<?php echo $facebook; ?>/" target="_blank" class="social-icon facebook">&nbsp;</a>
                <a href="https://www.instagram.com/<?php echo $instagram; ?>/" target="_blank" class="social-icon instagram">&nbsp;</a>
            </div>
		</div>
        <div class="row">
    		<div class="site-credit col-sm-12">
    			<a href="http://workshop.co" target="_blank">
    				<h6>Site by Work-Shop Design Studio</h6>
    			</a>
    		</div>
        </div>
	</div>
</footer>
