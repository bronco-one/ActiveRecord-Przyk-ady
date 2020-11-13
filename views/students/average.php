
<?php 
$this->title='Średnia ocen';
?>
<p><h1 class="display-3 alert-heading">Średnie ocen</h1></p><br/>
<table class="table table-striped">
    <tr>
    <th scope="col">#</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Średnia</th>
    </tr>
    <?php $l =1; ?>
<?php foreach($result as $r=>$value) { ?>
<?php foreach($student as $st) { ?>
<?php if( $r == $st->id) { ?>
    <tr>
        <th scope="row"><?php echo $l; ?></th>
        <td><?php echo $st->name; ?></td>
        <td><?php echo $st->last_name; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php $l++; ?>
<?php } ?>
<?php } ?>


<?php } ?>
</table>
