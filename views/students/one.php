<?php
$this->title='Student';
?>
<div class="row">
    <div class="col-sm-7">
       <div class="jumbotron">
           <p><h3><?php echo 'Pan/Pani: '.$student->name.' '.$student->last_name; ?></h3></p>
       </div>
<div>
    <table class="table table-striped">
        <tr>
            <th scope="col">#</th>
            <th>Przedmiot</th>
            <th>Ocena</th>
        </tr>
        <?php $l =1; ?>
            <?php foreach($subjects as $sub) { ?>
        <tr>
            <th scope="row"><?php echo $l; ?></th>
            <td> <?php echo $sub['name'] ?></td>
            <td>
                <?php foreach($marks as $mk){?>
                <?php if($sub['id_sub'] == $mk['id_sub']) { ?>
                <?php echo $mk['grade']; ?>
                <?php } ?>
                <?php }?>      
            </td>          
        </tr>
        <?php $l++; ?>
            <?php } ?>
        
    
    </table>
</div>
    </div>

    <div class="col-sm-5 jumbotron">
    <h2>Średnia ocen</h2>
    <p class="label label-default "><h2><b><?php echo $result; ?></b></h2></p>
    
    
    </div>
    <div class="jumbotron ">
        <a href="<?php echo yii\helpers\Url::to(['students/index']) ?>" class="btn btn-info"><b>Powrót</b></a>
    </div>
    </div>
