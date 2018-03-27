<?php
require('init.php');
$users = User::with('posts')->get();

?>
<a href="create.php">Создать</a>
<table>
    <tr>
        <th>ID пользователя</th>
        <th>Имя пользователя</th>
        <th>Управление</th>
    </tr>
    <?php $users = $users->each(function ($user) {
        $user->name = 'asd';
    });

    $array = [
            'item' => 'value',
            'ite123m' => 'value',
            'ite21m' => 'value',
            'ite11123m' => 'value',
            'ite11m' => 'value',
    ];
    $collection = new \Illuminate\Support\Collection();
    $plucked = $users->pluck('name', 'id');
    print_r($plucked)
    ?>
    <?php    foreach ($users as $user) :    ?>
        <tr>
            <td><a href="show.php?id=<?= $user->id; ?>"><?=$user->id?></a></td>
            <td><a href="show.php?id=<?= $user->id; ?>"><?=$user->name?></a></td>
            <td>
                Posts: <?=count($user->posts) ?>
                <?php if($user->posts) {
                    echo $user->posts[0]->title;
                }
                ?>
            </td>
            <td>
                <a href="edit.php?id=<?= $user->id; ?>">edit</a>
                <a href="delete.php?id=<?= $user->id; ?>">delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
