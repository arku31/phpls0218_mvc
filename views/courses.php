<ul>
    <?php foreach ($courses as $course) : ?>
        <li><?=$course['name']?> : <?=$course['url']?></li>
    <?php endforeach; ?>
</ul>