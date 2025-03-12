<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Search Any Brand</h1>

        <!-- Form Section -->
        <form class="row g-3 align-items-end" action="<?= site_url('gif/search') ?>" method="post">
            <?= csrf_field() ?>
            <div class="col-md-9 col-12 mb-3">
                <label for="searchWords" class="form-label">Search</label>
                <input type="search" class="form-control" id="searchWords" name="searchWords" placeholder="Brand" required>
            </div>
            <div class="col-md-3 col-12 mb-3">
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
        </form>

        <!-- Display images if $obj is set -->
        <?php if (isset($obj) && isset($obj->data)): ?>
            <div class="row mt-4">
                <?php foreach($obj->data as $one_image): ?>
                    <?php if (isset($one_image->images->fixed_height_small->webp)): ?>
                        <div class="col-md-4 col-6 mb-4">
                            <img src="<?= $one_image->images->fixed_height_small->webp ?>" alt="" class="img-fluid">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
