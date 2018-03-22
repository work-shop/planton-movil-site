<?php

    $sizing = array(
        'left' => '10',
        'right' => '10',
        'full' => '10'
    );

    $offsets = array(
        'left' => '0',
        'right' => '2',
        'full' => '1'
    );

    $size = $sizing[ $section['position'] ];
    $offset = $offsets[ $section['position'] ];

?>

<div class="col-sm-<?php echo $size; ?> offset-sm-<?php echo $offset; ?>">
    <div class="row">
        <div class="col-xs-6">
            <p class="small english"><?php echo $section['text']['english']; ?></p>
        </div>
        <div class="col-xs-6 mt2">
            <p class="small espanol"><?php echo $section['text']['espanol']; ?></p>
        </div>
    </div>
</div>
