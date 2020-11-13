
<?php
$this->title='Przedmioty';
?>
<p><h1 class="display-3 alert-heading">Przedmioty</h1></p><br/>
<table class="table table-striped ">
    
    <tr>
        <th scope="col">#</th>
        <th>Przedmiot</th>
        <th>Wykładowca</th>
        
        
    </tr>
   
    <?php $l =1; ?>
    <?php foreach($subjects as $su) {?>
    <?php $lecturer = $su->lecturer; ?>
    <tr>
        <th scope="row"><?php echo $l; ?></th>
        <td><?php echo $su['name'] ?></td>
        <td><?php echo $lecturer['name'].' '.$lecturer['last_name'] ?></td>
    </tr>
    <?php $l++; ?>
    <?php } ?>
</table>

