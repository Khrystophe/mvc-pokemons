<ul class="pokemon-list">
    <?php foreach($pokemonsList as $pokemon): ?>
    <li>
        <a href="<?= $router->generate('detail', ['id' => $pokemon->getId()]) ?>">
        <article class="card">
            <figure>
                <img src="<?= $baseUrl . '/assets/img/' . $pokemon->getNumber() . '.png' ?>" alt="<?= $pokemon->getName(); ?>">
                <figcaption>#<?= $pokemon->getNumber(); ?> <?= $pokemon->getName(); ?></figcaption>
            </figure>
        </article>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
