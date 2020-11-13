
<?php
use yii\helpers\Url;
use yii\helpers\Html;
$this->title='Studenci';
?>
<p><h1 class="display-3 alert-heading">Studenci</h1></p><br/>
<table class="table table-striped">
    <tr>
        <th scope="col">#</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>E-mail</th>
        <th>Telefon</th>
        
    </tr>
    <?php $l =1; ?>
    <?php foreach($students as $st) {?>
    <tr>
        <th scope="row"><?php echo $l; ?></th>
        <td><?php echo $st['name'] ?></td>
        <td><?php echo Html::a($st['last_name'], Url::to(['students/one','id'=>$st->id]) )?></td>
        <td><?php echo $st['email'] ?></td>
        <td><?php echo $st['phone'] ?></td>
    </tr>
    <?php $l++; ?>
    <?php } ?>
</table>


