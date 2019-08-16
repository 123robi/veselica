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
                <th>Ime</th>
                <th>Cena</th>
                <th><i class="fa fa-cog" aria-hidden="true"></i></th>
            </tr>
            </thead>
            <tbody id="tbody">
            <?php if(!empty($items)): ?>
                <?php foreach($items as $item):?>
                    <?= $this->element('template', ['item' => $item]); ?>
                <?php endforeach; ?>
            <?php else: ?>
            <td colspan="3">No record found</td>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>
<!-- Add Modal HTML -->
<div id="dodajPonudbo" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Dodaj ponudbo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Ime</label>
                        <input id="ime" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Cena</label>
                        <input id="cena" type="number" step="0.01" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Nazaj">
                    <input type="button"  id="addPonudba" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="popraviPonudbo" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Popravi ponudbo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>ID</label>
                        <input id="editID" disabled type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ime</label>
                        <input id="editIme" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Cena</label>
                        <input id="editCena" type="number"  step="0.01" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Nazaj">
                    <input id="editPonudba" type="button" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="izbrisiPonudbo" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Izbrisi ponudbo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Nazaj">
                    <input id="deletePonudba" type="button" class="btn btn-info" value="Izbrisi">
                </div>
            </form>
        </div>
    </div>
</div>
