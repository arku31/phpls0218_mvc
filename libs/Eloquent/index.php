<?php
require('init.php');
$users = User::all();

?>
<a href="create.php">Создать</a>
<table>
    <tr>
        <th>ID пользователя</th>
        <th>Имя пользователя</th>
        <th>Управление</th>
    </tr>
    <?php    foreach($users as $user) :    ?>
        <tr>
            <td><a href="show.php?id=<?= $user->id; ?>"><?=$user->id?></a></td>
            <td><a href="show.php?id=<?= $user->id; ?>"><?=$user->name?></a></td>
            <td>
                <a href="edit.php?id=<?= $user->id; ?>">edit</a>
                <a href="delete.php?id=<?= $user->id; ?>">delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
