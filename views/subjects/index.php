
<?php
$this->title='Przedmioty';
?>
<p><h1 class="display-3 alert-heading">Przedmioty</h1></p><br/>
<table class="table table-striped ">
    <thead class="thead-dark">
    <tr>
        <th>Przedmiot</th>
        <th>Wykładowca</th>
        
        
    </tr>
    </thead>
    <?php foreach($subjects as $su) {?>
    <tr>
        <td><?php echo $su['name'] ?></td>
        <?php foreach($lecturers as $lec){ ?>
        <?php if($su['id_lec'] == $lec['id_lec']) { ?>
        <td><?php echo $lec['name'].' '.$lec['last_name'] ?></td>
        <?php } ?>
       <?php } ?>
    </tr>
    <?php } ?>
</table>

