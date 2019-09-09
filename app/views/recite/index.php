<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php foreach ($data['chapters']['chapters'] as $row) {
                    if ($row['id'] == $data['verse']['verses'][0]['chapter_id']) {
                        echo $row['name_simple'];
                    }
                }
                ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="height: auto; max-height: 200px; overflow-x: hidden;">
                <?php foreach ($data['chapters']['chapters'] as $row) : ?>
                    <a class="dropdown-item" href="<?= BASEURL . '/recite/' . $row['id']; ?>"><?= $row['name_simple']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Go to Verse
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 20px; height: auto; max-height: 200px; overflow-x: hidden;">
                <?php foreach ($data['chapters']['chapters'] as $row) : ?>
                    <?php if ($row['id'] == $data['verse']['verses'][0]['chapter_id']) : ?>
                        <?php for ($i = 1; $i <= $row['verses_count']; $i++) : ?>
                            <a class="dropdown-item" href="#"><?= $i; ?></a>
                        <?php endfor; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div id="post-data">
        <?php foreach ($data['verse']['verses'] as $row) : ?>
            <div class="row">
                <div class="col-12">
                    <div class="arabic my-2">
                        <?php if ($row['verse_number'] == 1 && $row['chapter_id'] > 1 && $row['chapter_id'] != 9) : ?>
                            <?php $bismillah_split = explode('بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ', $row['text_madani']); ?>
                            <div class="row justify-content-center bismillah mb-3">
                                ﷽
                            </div>
                            <?= $bismillah_split[1]; ?>
                        <?php else : ?>
                            <?= $row['text_madani']; ?>
                        <?php endif; ?>
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
    </div>

    <div class="ajax-load text-center" style="display:none">
        <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading..</p>
    </div>

    <div class="row justify-content-center my-3">
        <a href="<?= BASEURL; ?>" class="btn btn-outline-info">Back to Home</a>
    </div>
</div>

<script type="text/javascript">
    var page = 1;
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
        }
    });

    function loadMoreData(page) {
        $.ajax({
                url: '<?= BASEURL . "/recite/page/" . $data['verse']['verses'][0]['chapter_id'] . "/"; ?>' + page,
                type: "get",
                beforeSend: function() {
                    $('.ajax-load').show();
                }
            })
            .done(function(data) {
                if (data == " ") {
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('server not responding...');
            });
    }
</script>