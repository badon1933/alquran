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
    <div id="post-data">
        <?php foreach ($data['verse']['verses'] as $row) : ?>
            <div class="row">
                <div class="col-12">
                    <div class="arabic my-2">
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
    </div>

    <div class="row justify-content-center my-3">
        <a href="<?= BASEURL; ?>" class="btn btn-outline-info">Back to Home</a>
    </div>

    <div class="ajax-load text-center" style="display:none">
        <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading..</p>
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