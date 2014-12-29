<div id="content">
    <div id="gallery">
        <select id="sort-image">
            <option value="0">Sort your photos</option>
            <option value="1">Oldest First</option>
            <option value="2">Newest First</option>
        </select>
        <ul id="gallery-ul">
            <?php if (count($data->images) == 0) : ?>
            <h3>There are no pictures, upload <a href="/upload">yours</a></h3>
                <?php
            else:
                require __DIR__ . '/image-list.php';
            endif;
            ?>
        </ul>
    </div>
</div>