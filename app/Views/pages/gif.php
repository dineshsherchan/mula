<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Search any Brand</h1>

        <form class="row g-3 align-items-end" action="<?= site_url("gif/search") ?>" method="post">
            <?= csrf_field() ?>
            <div class="col-md-10 mb-3">
                <label for="searchWords" class="form-label">Search</label>
                <input type="search" class="form-control" id="searchWords" name="searchWords" placeholder="Brand">
            </div>
            <div class="col-md-2 mb-3">
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
        </form>

        <!-- Display images if $obj is set -->
        <?php if (isset($obj) && isset($obj->data)): ?>
            <?php foreach($obj->data as $one_image): ?>
                <?php if (isset($one_image->images->fixed_height_small->webp)): ?>
                    <img src="<?= $one_image->images->fixed_height_small->webp ?>" alt="">
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</body>