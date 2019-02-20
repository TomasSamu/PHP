<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>

    <style>

.board .row {
    width: 24em;
    display: flex;
}
.board .row > div {
    width: 3em;
    height: 3em;
}
.board .white {
    background-color: #c2c2c2;
}
.board .black {
    background-color: #525252;
}
    
    </style>
    <body>

        
<div class="board">

<?php for($i=0;$i<4;$i++) : ?>
    <div class="row">
    <?php for($j=0;$j<4;$j++) : ?>
        <div class="white"></div>
        <div class="black"></div>
<?php endfor; ?>
    </div>

    <div class="row">
    <?php for($k=0;$k<4;$k++) : ?>
        <div class="black"></div>
        <div class="white"></div>
<?php endfor; ?>
    </div>

<?php endfor; ?>

</div>

        <script src=""></script>
    </body>
</html>