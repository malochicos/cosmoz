<?php defined('APPLICATION') or die;
$media = $this->data('Media');
$tk = Gdn::session()->transientKey();
?>
<style>
.SortHandle {
    border-radius: 0;
    color: #333333;
    display: block;
    font-family: arial;
    font-size: 14px;
    font-weight: bold;
    height: 2em;
    line-height: 1;
    margin: 0;
    padding: <?= isMobile() ? '20' : '4' ?>px 2px;
    visibility: hidden;
    width: auto;
}
.SortHandle:hover {
    background: #333333 none repeat scroll 0 0;
    border: medium none;
    color: #ffffff;
    text-decoration: none;
    visibility: visible;
}
.Item:hover .SortHandle {
    visibility: visible;
}
</style>
<div class="DataListWrap">
    <h2 class="H"><?= t('Gallery') ?></h2>
    <?php if ($this->data('CanAdd')): ?>
    <div><a href="<?= $this->data('UploadUrl') ?>" class="Button Popup"><?= t('Upload New Image') ?></a></div>
    <?php endif ?>
    <ul class="DataList SearchResults">
    <?php if (count($media) == 0): ?>
        <li class="Item Empty"><?= t("This user hasn't uploaded any images yet") ?></li>
    <?php else: ?>
        <?php foreach($media as $image): ?>
        <li id="Image_<?= $image['MediaID'] ?>" class="Item Image"<?php if ($this->data('CanEdit')): ?> draggable="true"<?php endif ?>>
            <?php if ($this->data('CanEdit')): ?>
            <div class="Options">
                <a class="Delete PopConfirm" href="<?= $this->data('DeleteUrl').$image['MediaID'] ?>"><?= t('DeleteImage', '&times;') ?></a>
                <span class="SortHandle"><?= t('SortHandle', '&#x25B2;<br>&#x25BC;') ?></span>
            </div>
            <?php /* <div class="ImageTitle"><?= Gdn_Format::text($image['GalleryTitle']) ?></div> */ ?>
            <?php endif ?>
            <div>
                <a href="<?= Gdn_Upload::url($image['Path']) ?>" class="ImageLink">
                    <img
                        src="<?= Gdn_Upload::url($image['ThumbPath']) ?>"
                        width="<?= $image['ThumbWidth'] ?>"
                        height="<?= $image['ThumbHeight'] ?>"
                        alt="<?= $image['Name'] ?>"
                    />
                </a>
            </div>
        </li>
        <?php endforeach ?>
    <?php endif ?>
    </ul>
</div>

<script>
$('.ImageLink').magnificPopup({
    type: 'image',
    gallery:{
        enabled:true
    }
});
<?php if ($this->data('CanEdit')): ?>
(function () {
    sortable('.DataList.SearchResults', {
        forcePlaceholderSize: true,
        handle: '.SortHandle'
    })[0].addEventListener('sortupdate', function(e) {
        var newSort = [];
        e.detail.newEndList.forEach(function (item, index) {
            newSort[index] = item.id.substr(6);
        });

        $.ajax({
            type: 'POST',
            url: '<?= $this->data('SortUrl') ?>',
            data: {
                'TransientKey': gdn.definition('TransientKey'),
                'NewSort': newSort.toString(),
                'action': 'sort'
            },
            dataType: 'json'
            /*
            ,
            success: function(json) {
                gdn.inform(json);
            }
            */
        });
    });
})();
<?php endif ?>
</script>
