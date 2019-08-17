<div class="row mt-3">
        <?php foreach($items as $item):?>
        <div class="col-4">
                <div class="card mb-3">
                        <div class="card-header" id="<?php echo $item->id ?>">
                                <?= $item->ime ?>
                                <div class="minus">
                                        <i class="fa fa-minus-circle fa-6"></i>
                                </div>
                                <div class="number badge">
                                        <i class="fa fa-circle"><span class="num">0</span></i>
                                </div>
                        </div>
                </div>
        </div>
        <?php endforeach; ?>
</div>