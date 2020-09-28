<?php
use yii\widgets\LinkPager;
?>
<div class="content content-fluid">
    <h1>Paises</h1>
    <div style="padding: 15px 0px;">
        <a class="btn btn-lg btn-primary" href="index.php?r=crud/insert">Agregar nuevo País</a>
    </div>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Población</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $country) : ?>
                <tr>
                    <th scope="row"><?=$country->code?></th>
                    <td><?=$country->name?></td>
                    <td><?=$country->population?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>