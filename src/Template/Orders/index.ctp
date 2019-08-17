<div class="container" >
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Upravljal <b>Ponudbo</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#dodajPonudbo" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Dodaj novo ponudbo</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover" >
            <thead>
            <tr>
                <th>User</th>
            </tr>
            </thead>
            <tbody id="tbody">
            <?php if(!empty($orders)): ?>
            <?php foreach($orders as $order):?>
                <tr id="<?php echo $order->id ?>">
                    <td width="70%" class="ime"><?php echo $order->user_id ?></td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <td colspan="3">No record found</td>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>