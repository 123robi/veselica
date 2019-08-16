<body id="punudbaTable">
<div class="container">
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
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Ime</th>
                <th>Cena</th>
                <th><i class="fa fa-cog" aria-hidden="true"></i></th>
            </tr>
            </thead>
            <tbody >
            <?php if(!empty($items)): ?>
                <?php foreach($items as $item):?>
                <tr>
                    <td width="70%"><?php echo $item->ime ?></td>
                    <td width="10%"><?php echo $item->cena ?> €</td>
                    <td width="10%">
                        <a href="#popraviPonudbo" class="edit" data-toggle="modal" data-id="<?php echo $item->id ?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit"  id="addPonudba" class="btn btn-success" value="Add">
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
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input id="editPonudba" type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

</body>