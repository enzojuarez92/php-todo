<?php

include_once './controllers/consult.php';

foreach ($res as $data) :

?>

    <tr>
        <td><?php echo $data['task'] ?></td>
        <td><?php echo $data['description'] ?></td>
        <td><?php echo $data['expiration'] ?></td>
        <td>
            <a href=""><i class="fa-regular fa-pen-to-square text-primary mx-1"></i></a>
            <a href=""><i class="fa-solid fa-trash text-danger mx-1"></i></a>
        </td>
    </tr>

<?php endforeach ?>