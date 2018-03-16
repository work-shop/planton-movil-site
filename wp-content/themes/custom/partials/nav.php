<menu class="menu container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <span class="icon menu-toggle white" data-icon="ﬂ"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <?php wp_nav_menu( array('menu' => 4) ); ?>
        </div>
    </div>
</menu>
<nav id="nav" class="fixed">
	<div class="container-fluid">
		<div class="row">
            <div class="col-xs-1 col-sm-1">
                <span class="icon menu-toggle" data-icon="Í"></span>
            </div>
			<div class="logo">
				<a href="/">
					<?php get_template_part('partials/logo'); ?>
				</a>
			</div>
		</div>
	</div>
</nav>
