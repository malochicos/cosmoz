<?php defined('APPLICATION') or die; ?>
<style>
#GalleryItemPreview {
    margin-top: 2em;
    overflow-x: auto;
}
#GalleryItemPreview > img {
    width: 50%;
    height: 50%;
}
</style>
<div class="FormWrapper">
    <h1 class="H"><?= t('Add Gallery Item') ?></h1>
    <?= $this->Form->open(['enctype' => 'multipart/form-data']) ?>
    <?= $this->Form->errors() ?>
    <ul>
        <li>
            <?php
            echo $this->Form->label(
                'Choose a new item for your gallery',
                'NewGalleryItem'
            );
            echo $this->Form->input(
                'NewGalleryItem',
                'file',
                ['id' => 'NewGalleryItem', 'accept' => 'image', 'capture' => 'camera']
            );
            ?>
        </li>
        <?php /*
        <li class="GalleryTitleInput Hidden">
            <?= $this->Form->label('Title', 'Name') ?>
        </li>
        <li class="GalleryTitleInput Hidden">
            <?= $this->Form->textBox('Name', ['class' => 'InputBox SmallInput']) ?>
        </li>
        */ ?>
        <li>
            <div id="GalleryItemPreview"></div>
        </li>
    </ul>
    <div class="Buttons Buttons-Confirm">
        <?= $this->Form->button('Upload', ['class' => 'Button Primary']) ?>
        <?= $this->Form->button('Cancel', ['type' => 'button', 'class' => 'Button Close']) ?>
    <div>
    <?= $this->Form->close() ?>
</div>

<script>
var fileInput = document.getElementById('NewGalleryItem');
var filePreview = document.getElementById('GalleryItemPreview');

fileInput.addEventListener('change', function(e) {
    var file = fileInput.files[0];
    var imageType = /image.*/;

    if (file.type.match(imageType)) {
        var reader = new FileReader();

        reader.onload = function(e) {
            filePreview.innerHTML = '';

            var img = new Image();
            img.src = reader.result;
            filePreview.appendChild(img);

            var elements = document.getElementsByClassName('GalleryTitleInput');
            for (var i = 0; i < elements.length; i++) {
               elements[i].classList.toggle('Hidden');
            }
        }

        reader.readAsDataURL(file);
    } else {
        filePreview.innerHTML = 'File not supported!'
    }
});
</script>
<?php
/*
https://github.com/SeregPie/PaperDuck
https://github.com/odyniec/imgareaselect
 */