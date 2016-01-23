<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
       
<?php echo Form::open(array('url' => 'foo/bar')); ?>

    <?php echo Form::label('email', 'E-Mail Address', array('class' => 'awesome'));; ?>

<?php echo Form::close(); ?>


<br>
<?php echo $date = $carbon->now()->subDays(5)->diffForHumans();; ?>


            </div>
        </div>
    </body>
</html>
