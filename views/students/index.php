
<?php
$this->title='Studenci';
?>
<p><h1 class="display-3 alert-heading">Studenci</h1></p><br/>
<table class="table table-striped">
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>E-mail</th>
        <th>Telefon</th>
        
    </tr>
    <?php foreach($students as $st) {?>
    <tr>
        <td><?php echo $st['name'] ?></td>
        <td><?php echo $st['last_name'] ?></td>
        <td><?php echo $st['email'] ?></td>
        <td><?php echo $st['phone'] ?></td>
    </tr>
    <?php } ?>
</table>

