<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class='col-md-12 col-md-offset-2'>
    
    <form class="form-inline" id="chatForm">
        <div class="form-group">
            <input name="message" type="text" id='messageInput' required class='form-control'/>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
</div>
<hr>
<div class='row'>

    <table class='table table-responsive'>
        <thead>
            <tr>
                <td>Created</td>
                <td>Text</td>
            </tr>
        </thead>
        <tbody id='messageDiv'>
            <?php foreach ($messages as $v){?>
            <tr>
                <td><?php echo $v['created']; ?></td>
                <td><?php echo $v['text']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php $this->registerJsFile('/js/main.js', ['depends' => ['app\assets\AppAsset']] );  ?>