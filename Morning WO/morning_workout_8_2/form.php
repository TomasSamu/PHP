<form action="" method="post">


<?php foreach ($items as $key => $text) : ?>

    <input type="text" value="<?=htmlspecialchars($text); ?>" name="items[<?= $key; ?>]">
    <br>

<?php endforeach; ?>

<input type="text" value="" name="items[<?= count($items); ?>]">

<br>
<br>

<input type="submit" value="Add">


</form>