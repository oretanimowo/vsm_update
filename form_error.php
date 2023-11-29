<?php if(count($error) > 0){?>
    <?php foreach($error as $error){?>
        <span class="error"><?php echo $error . "<br>" ?></span>
    <?php };?>
<?php };?>