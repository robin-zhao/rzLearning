<div id="header">
    <h1 id="logo"><a href="/"><img src="assets/images/logo.png" alt="shareimg - logo" title="ShareImg - The Image Sharing Service" /></a></h1>
    <ul id="nav-Main">
        <?php
        $isIndex = $isGallery = $isUpload = false;
        switch ($_SERVER['REQUEST_URI'])
        {
            case '/':
            case '/index.php':
                $isIndex = true;
            case '/gallery.php':
                $isGallery = true;
            case '/upload.php':
                $isUpload = true;
            default:
                $isIndex = true;
        }
        ?>
        <li <?php $isIndex ? ' class="ACT"' : '' ?>><a href="/">Home</a></li>
        <li <?php $isUpload ? ' class="ACT"' : '' ?>><a href="/upload">Photo Upload</a></li>
        <li <?php $isGallery ? ' class="ACT"' : '' ?>><a href="/gallery">Gallery</a></li>
    </ul>
</div>