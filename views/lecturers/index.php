
<?php
$this->title='Wykładowcy';
?>
<p><h1 class="display-3 alert-heading">Wykładowcy</h1></p><br/>
<table class="table table-striped ">
    <thead class="thead-dark">
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>E-mail</th>
        <th>Telefon</th>
        
    </tr>
    </thead>
    <?php foreach($lecturers as $le) {?>
    <tr>
        <td><?php echo $le['name'] ?></td>
        <td><?php echo $le['last_name'] ?></td>
        <td><?php echo $le['email'] ?></td>
        <td><?php echo $le['phone'] ?></td>
    </tr>
    <?php } ?>
</table>

