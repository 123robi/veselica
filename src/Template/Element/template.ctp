<tr>
    <td width="70%"><?php echo $item->ime ?></td>
    <td width="10%"><?php echo $item->cena ?> €</td>
    <td width="10%">
        <a href="#popraviPonudbo" class="edit" data-toggle="modal" data-id="<?php echo $item->id ?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
        <a href="#izbrisiPonudbo" class="delete" data-toggle="modal" data-id="<?php echo $item->id ?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
    </td>
</tr>
