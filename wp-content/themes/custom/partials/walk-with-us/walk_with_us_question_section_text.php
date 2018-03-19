<div class="col-sm-8">
    <?php foreach( $questions as $j => $question ) : ?>
        <div class="row mb2">
            <div class="col-sm-6">
                <h5 class="english">
                    <?php echo $question['question']['english']; ?>
                </h5>
                <p class="small dark">
                    <?php echo $question['answer']['english']; ?>
                </p>
            </div>

            <div class="col-sm-6">
                <h5 class="espanol">
                    <?php echo $question['question']['espanol']; ?>
                </h5>
                <p class="small dark">
                    <?php echo $question['answer']['espanol']; ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
