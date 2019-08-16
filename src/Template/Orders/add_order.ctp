<div class="row">
<?php foreach($items as $item):?>
        <div class="col-4">
                <div class="card mb-3">
                        <div class="card-header">
                                <?= $item->ime ?>
                        </div>
                        <div class="card-body">
                                <div class="col-sm-12">
                                        <span> <?= $item->cena ?>€ </span>
                                </div>
                                <div class="row big-font">
                                        <div class="col-6 minus">
                                               <bold>-</bold>
                                        </div>
                                        <div class="col-6 plus">
                                                <bold>+</bold>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
<?php endforeach; ?>
</div>