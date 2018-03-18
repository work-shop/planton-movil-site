<?php if ( $partners || $sponsors ) : ?>
<div class="col-sm-4">
    <?php if ( $sponsors && count( $sponsors ) > 0 ) : ?>
    <div class="row">
        <div class="col-sm-12">
            <h5 class="page-hero-tagline tagline bold">
                <span class="section-title-english english bold">Sponsors<span class="page-hero-title-slash">/</span></span>
                <span class="section-title-espanol espanol bold">Patrocinadores</span>
            </h5>
        </div>

        <div class="col-sm-12 mb4">
        <div class="row">
        <?php foreach ($sponsors as $i => $sponsor) : ?>
            <div class="col-sm-4 sponsor">
                <a class="affiliate-logo-link" href="<?php echo $sponsor['sponsor_url']; ?>" target="_blank">
                    <img src="<?php echo $sponsor['sponsor_logo']['sizes']['medium']; ?>" alt="">
                </a>
            </div>
        <?php endforeach; ?>
        </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if ( $partners && count( $partners ) > 0 ) : ?>
    <div class="row">
        <div class="col-sm-12">
            <h5 class="page-hero-tagline tagline bold">
                <span class="section-title-english english bold">Partners<span class="page-hero-title-slash">/</span></span>
                <span class="section-title-espanol espanol bold">Compañeros</span>
            </h5>
        </div>
        <div class="col-sm-12 mb4">
        <div class="row">
        <?php foreach ($partners as $i => $partner) : ?>
            <div class="col-sm-4 partner affiliate-logo">
                <a class="affiliate-logo-link" href="<?php echo $partner['partner_url']; ?>" target="_blank">
                    <img src="<?php echo $partner['partner_logo']['sizes']['medium']; ?>" alt="">
                </a>
            </div>
        <?php endforeach; ?>
        </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>
