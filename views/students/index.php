

<table class="table">
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

