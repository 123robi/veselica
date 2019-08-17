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
                <th class="d-none">Placano</th>
                <th>Cena</th>
                <th><i class="fa fa-cog" aria-hidden="true"></i></th>
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
                if (!isset($array[$order->narocilo_id]['ordernum'])){
                $array[$order->narocilo_id]['ordernum'] = [];
                }
                if (!isset($array[$order->narocilo_id]['placano'])){
                    $array[$order->narocilo_id]['placano'] = [];
                }
            if (!isset($array[$order->narocilo_id]['cena'])){
            $array[$order->narocilo_id]['cena'] = [];
            }
                 array_push($array[$order->narocilo_id]['podatki'], $order->_matchingData['Items']->ime . " x " . $order->kolicina . "  ");
                $array[$order->narocilo_id]['placano'] = $order->_matchingData['Narocila']->placano;
            $array[$order->narocilo_id]['ordernum'] = $order->narocilo_id;
            array_push( $array[$order->narocilo_id]['cena'],$order->_matchingData['Items']->cena);
            endforeach; ?>
            <?php foreach($array as $order):?>

                <td width="90%" class="ime"><?php echo implode(" | ",$order['podatki']); ?></td>
                <td width="10%" class="d-none placano"><?php if ($order['placano'] == 0) { echo "Ne"; } else{ echo "Ja";} ?></td>
                <td width="10%" class="ime"><?php echo array_sum($order['cena']);?> €</td>
                <td><a href="#placaj" data-toggle="modal" class="btn btn-success btn-sm">></a></td>
            <?php endforeach; ?>
            <?php else: ?>
            <td colspan="3">No record found</td>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>

<div id="placaj" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Plačaj</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <span class="pull-left money">
                        <span class="">Skupaj: <span class="total">0</span> €</span>
                        </br>
                        <span class="">Vračilo: <span class="return">0</span> €</span>
                    </span>
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
            </form>
        </div>
    </div>
</div>