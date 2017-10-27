
@extends('layout')

@section('content')

    <h1>Write a New Message</h1>

<form class="form-group" action="http://localhost:8000/messages" method="post">
title:  <input type="text" name="title" value=""><br>
body:  <input type="textarea" name="body" value=""><br>
created_at:  <input type="date" name="created_at" value=""><br>
        <input type="submit" name="Add Message" value="Add Message">
</form>


<?php
if ($errors->any()){
?>
    <ul>
        <?php foreach ($errors->all() as $error){?>
            <li><?php echo $error ?></li>
        <?php }; ?>
    </ul>
<?php  }; ?>


@stop
