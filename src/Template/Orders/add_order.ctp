<form>
        <div class="row mt-3">
                <?php foreach($items as $item):?>
                <div class="col-4">
                        <div class="card mb-3" id="<?php echo $item->id ?>">
                                <div class="background-number">0</div>
                                <span class="item-name"><?= $item->ime ?></span>
                                <i class="minus fa fa-minus-circle fa-6"></i>
                        </div>
                </div>
                <?php endforeach; ?>
                <input type="button"  id="addOrder" class="btn btn-success" value="Add">
        </div>
</form>

