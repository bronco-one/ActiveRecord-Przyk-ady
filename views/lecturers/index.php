
<?php
$this->title='Wykładowcy';
?>
<p><h1 class="display-3 alert-heading">Wykładowcy</h1></p><br/>
<table class="table table-striped ">
    
    <tr>
        <th scope="col">#</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>E-mail</th>
        <th>Telefon</th>
        
    </tr>
    <?php $l =1; ?>
    <?php foreach($lecturers as $le) {?>
    <tr>
        <th scope="row"><?php echo $l; ?></th>
        <td><?php echo $le['name'] ?></td>
        <td><?php echo $le['last_name'] ?></td>
        <td><?php echo $le['email'] ?></td>
        <td><?php echo $le['phone'] ?></td>
    </tr>
    <?php $l++; ?>
    <?php } ?>
</table>

