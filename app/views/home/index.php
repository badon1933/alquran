<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center">
                <h1 class="display-4">Fluid jumbotron</h1><br>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut nulla laudantium quidem totam error</p>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-10">
            <h4>
                <span>Quick Links </span>
                <span>
                    <a href="#">Surah Ar-Rahman</a>
                </span>
                <span>
                    <a href="#">Surah Al-Mulk</a>
                </span>
                <span>
                    <a href="#">Ayatul Kursi</a>
                </span>
            </h4>
            <hr>
        </div>
    </div>

    <div class="row justify-content-center mb-3">
        <span>
            <h3>Surah List</h3>
        </span>
    </div>

    <div class="row">
         <div class="col-md-4">
            <ul>
                <?php for ($i = 0; $i < 38; $i++) : ?>
                <li>
                    <a href="#" class="row">
                        <div class="col-2"><?= $i + 1; ?></div>
                        <div class="col-7"><?= $data['chapter']['chapters'][$i]['name_simple']; ?></div>
                        <div class="col-3"><?= $data['chapter']['chapters'][$i]['name_arabic']; ?></div>
                        <div class="col-2"></div>
                        <div class="col-10"><?= $data['chapter']['chapters'][$i]['translated_name']['name']; ?></div>
                    </a>
                </li>
                <?php endfor ?>
            </ul>
        </div>

        <div class="col-md-4">
            <ul>
                <?php for ($i = 37; $i < 76; $i++) : ?>
                <li>
                    <a href="#" class="row">
                        <div class="col-2"><?= $i + 1; ?></div>
                        <div class="col-7"><?= $data['chapter']['chapters'][$i]['name_simple']; ?></div>
                        <div class="col-3"><?= $data['chapter']['chapters'][$i]['name_arabic']; ?></div>
                        <div class="col-2"></div>
                        <div class="col-10"><?= $data['chapter']['chapters'][$i]['translated_name']['name']; ?></div>
                    </a>
                </li>
                <?php endfor ?>
            </ul>
        </div>

        <div class="col-md-4">
            <ul>
                <?php for ($i = 75; $i < 114; $i++) : ?>
                <li>
                    <a href="#" class="row">
                        <div class="col-2"><?= $i + 1; ?></div>
                        <div class="col-7"><?= $data['chapter']['chapters'][$i]['name_simple']; ?></div>
                        <div class="col-3"><?= $data['chapter']['chapters'][$i]['name_arabic']; ?></div>
                        <div class="col-2"></div>
                        <div class="col-10"><?= $data['chapter']['chapters'][$i]['translated_name']['name']; ?></div>
                    </a>
                </li>
                <?php endfor ?>
            </ul>
        </div>

    </div>

</div>

<div class="jumbotron mb-0">
    <div class="row justify-content-center">
        <span>
            <h4>This is Footer</h4>
        </span>
    </div>
</div>
