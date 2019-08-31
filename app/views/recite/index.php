<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <?php foreach ($data['verse']['verses'] as $row) : ?>
        <div class="row">
            <div class="col-12">
                <div class="word my-2">
                    <?= $row['text_madani']; ?>
                </div>
                <div class="row my-2">
                    Translation
                </div>
                <div class="row">
                    <?= $row['translations'][0]['text']; ?>
                </div>
            </div>
        </div>
        <hr>
    <?php endforeach ?>

    <div class="row justify-content-center my-3">
        <a href="<?= BASEURL; ?>/recite/page/<?= $data['verse']['verses'][0]['chapter_id']; ?>/" class="btn btn-outline-info">Next Page</a>
        <a href="<?= BASEURL; ?>" class="btn btn-outline-info">Back to Home</a>
    </div>
</div>