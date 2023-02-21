<p>Cliquez sur un type pour voir tous les Pokémons de ce type</p>
<nav>
    <ul class="type-list">
        <?php foreach($typesList as $type): ?>
        <li style="background-color: #<?= $type->getColor(); ?>;">
            <a href="<?= $router->generate('type-detail', ['id' => $type->getId()]) ?>"><?= $type->getName(); ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</nav>