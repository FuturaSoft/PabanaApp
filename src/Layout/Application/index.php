<?php echo $this->Html->Doctype; ?>
<html lang="en">
    <head>
        <?php echo $this->Html->Head; ?>
    </head>
    <body>
        <?php echo $this->element('header'); ?>
        <main role="main">
            <?php echo $this->View; ?>
        </main>
        <?php echo $this->element('footer'); ?>
        <?php echo $this->Html->Script; ?>
    </body>
</html>