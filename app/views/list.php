<?php if (count($comment) > 0) { ?>
    <?php foreach ($comment as $item) { ?>
        <div class="review">
            <div class="row">
                <!--not work col-md-offset-*-->
                <div class="col-md-2 col-lg-2" id="author"><b><i><?php echo $item['author']; ?></i></b></div>
            </div>
            <div class="row" id="rowComment">
                <div class="col-md-2 col-lg-2" id="colImage"><img src="<?php echo 'images/' . $item['image']; ?>" id="image"></div>
                <div class="col-md-10 col-lg-10" id="coment"><?php echo $item['coment']; ?></div>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-10"></div>
                <div class="col-md-2 col-lg-2" id="date"><?php echo $item['date']; ?></div>
            </div>
        </div>
        <br/>

    <?php } ?>

<?php } else {
    echo 'Оставьте отзыв и Вас настигнет счастье';
} ?>

<p></p>