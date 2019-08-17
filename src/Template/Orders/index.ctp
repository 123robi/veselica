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
                <th>Narocilo</th>
                <th>Placano</th>
            </tr>
            </thead>
            <tbody id="tbody">
            <?php  $array = []; $narocilo_id = 0; if(!empty($orders)): ?>
            <?php foreach($orders as $order):
            if (!isset( $array[$order->narocilo_id])){
                $array[$order->narocilo_id] =  [];
            }
                if (!isset($array[$order->narocilo_id]['podatki'])){
                     $array[$order->narocilo_id]['podatki'] = [];
                 }
                if (!isset($array[$order->narocilo_id]['placano'])){
                $array[$order->narocilo_id]['placano'] = [];
                }
                 array_push($array[$order->narocilo_id]['podatki'], $order->_matchingData['Items']->ime . " x " . $order->kolicina . "  ");
                $array[$order->narocilo_id]['placano'] = $order->_matchingData['Narocila']->placano;
            endforeach; ?>
            <?php foreach($array as $order):?>
                <td width="70%" class="ime"><?php echo implode(" | ",$order['podatki']); ?></td>
                <td width="10%" class="placano"><?php if ($order['placano'] == 0) { echo "Ne"; } else{ echo "Ja";} ?></td>
            <?php endforeach; ?>
            <?php else: ?>
            <td colspan="3">No record found</td>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>