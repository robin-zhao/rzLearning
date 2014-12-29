<div id="aside">
    <ul>
        <?php if (count($data->images) == 0) : ?>
            <h3>There are no pictures, upload <a href="/upload">yours</a></h3>
            <?php
        else:
            require __DIR__ . '/image-list.php';
        endif;
        ?>
    </ul>
</div>