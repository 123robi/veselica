<div class="container narocila" >
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Narocila</b></h2>
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
                <th>Placano</th>
                <th><i class="fa fa-cog" aria-hidden="true"></i></th>
            </tr>
            </thead>
            <tbody id="tbody">
            <?php if(!empty($orders)): ?>
            <?php foreach($orders as $order):?>
                <tr id="<?php echo $order->id ?>">
                    <td width="70%" class="user"> </td>
                    <td width="10%" class="placano"><?php if ($order->placano == 0) { echo "Ne"; } else{ echo "Ja";} ?></td>
                    <td width="10%">
                    <a href="#popraviPonudbo" class="edit" data-toggle="modal" data-id="<?php echo $order->id ?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#izbrisiPonudbo" class="delete" data-toggle="modal" data-id="<?php echo $order->id ?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <td colspan="3">No record found</td>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>