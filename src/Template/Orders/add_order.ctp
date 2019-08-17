<?= $this->Form->create() ?>
        <div class="content row mt-3">
                <?php foreach($items as $item):?>
                <div class="col-4">
                        <div class="card mb-3" id="<?php echo $item->id ?>">
                                <div class="background-number">0</div>
                                <div class="d-none price"><?= $item->cena ?></div>
                                <span class="item-name"><?= $item->ime ?></span>
                                <i class="minus fa fa-minus-circle fa-6"></i>
                        </div>
                </div>
                <?php endforeach; ?>
        </div>
        <div class="controls">
            <span class="pull-left money">
                <span class="">Skupaj: <span class="total">0</span> €</span>
                </br>
                <span class="">Vračilo: <span class="return">0</span> €</span>
            </span>
            <input type="button" id="addOrder" class="pull-right btn btn-outline-success btn-lg mb-3" value="Dodaj narocilo">

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">€</span>
                </div>
                <input id="value" type="number" class="form-control" placeholder="Znesek" aria-label="Value" aria-describedby="basic-addon1">
                <div class="input-group-append">
                    <button id="pay" class="btn btn-outline-info" type="button">Plačaj</button>
                </div>
            </div>
        </div>
<?= $this->Form->end() ?>

