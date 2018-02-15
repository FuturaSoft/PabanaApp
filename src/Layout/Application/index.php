<?= $this->Html->Doctype; ?>
<html lang="en">
    <head>
        <?= $this->Html->Head; ?>
    </head>
    <body>
        <?= $this->element('header'); ?>
        <main role="main">
            <?= $this->View; ?>
        </main>
        <?= $this->element('footer'); ?>
        <?= $this->Html->Script; ?>
    </body>
</html>