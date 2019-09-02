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