<div class="jumbotron jumbotron-fluid" style="background-image: url('../public/img/bg.jpg'); background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center">
                <a href="https://www.freepik.com/free-photos-vectors/pattern" style="display: none">Pattern vector created by kjpargeter - www.freepik.com</a>
                <img class="display-4" src="https://upload.wikimedia.org/wikipedia/commons/f/f5/Quran2.png" alt="calligraphy">
                <p class="display-4 mt-4 mb-0" style="color:antiquewhite">THE HOLY QURAN</p><br>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <h5>
                <span class="mr-1 quick-link">Quick Links </span>
                <span class="mx-1 quick-link">
                    <a href="#">Surah Ar-Rahman</a>
                </span>
                <span class="mx-1 quick-link">
                    <a href="#">Surah Al-Mulk</a>
                </span>
                <span class="mx-1 quick-link">
                    <a href="#">Ayatul Kursi</a>
                </span>
            </h5>
            <hr>
        </div>
    </div>

    <div class="row justify-content-center">
        <span>
            <h3>Surah List</h3>
        </span>
    </div>

    <div class="row my-3">
        <div class="col-md-4">
            <ul>
                <?php for ($i = 0; $i < 38; $i++) : ?>
                    <li>
                        <a href="<?= BASEURL; ?>/recite/<?= $data['chapter']['chapters'][$i]['id']; ?>" class="row surah-list my-3">
                            <div class="col-2"><?= $i + 1; ?></div>
                            <div class="col-6"><?= $data['chapter']['chapters'][$i]['name_simple']; ?></div>
                            <div class="col-3">
                                <span class="icon-surah<?= $i + 1; ?>">
                                </span>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-10 uppercase"><?= $data['chapter']['chapters'][$i]['translated_name']['name']; ?></div>
                        </a>
                    </li>
                <?php endfor ?>
            </ul>
        </div>

        <div class="col-md-4">
            <ul>
                <?php for ($i = 38; $i < 76; $i++) : ?>
                    <li>
                        <a href="<?= BASEURL; ?>/recite/<?= $data['chapter']['chapters'][$i]['id']; ?>" class="row surah-list my-3">
                            <div class="col-2"><?= $i + 1; ?></div>
                            <div class="col-6"><?= $data['chapter']['chapters'][$i]['name_simple']; ?></div>
                            <div class="col-3 surah-name">
                                <span class="icon-surah<?= $i + 1; ?>">
                                </span>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-10 uppercase"><?= $data['chapter']['chapters'][$i]['translated_name']['name']; ?></div>
                        </a>
                    </li>
                <?php endfor ?>
            </ul>
        </div>

        <div class="col-md-4">
            <ul>
                <?php for ($i = 76; $i < 114; $i++) : ?>
                    <li>
                        <a href="<?= BASEURL; ?>/recite/<?= $data['chapter']['chapters'][$i]['id']; ?>" class="row surah-list my-3">
                            <div class="col-2"><?= $i + 1; ?></div>
                            <div class="col-6"><?= $data['chapter']['chapters'][$i]['name_simple']; ?></div>
                            <div class="col-3 surah-name">
                                <span class="icon-surah<?= $i + 1; ?>">
                                </span>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-10 uppercase"><?= $data['chapter']['chapters'][$i]['translated_name']['name']; ?></div>
                        </a>
                    </li>
                <?php endfor ?>
            </ul>
        </div>

    </div>

</div>