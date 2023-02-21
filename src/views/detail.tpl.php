<article class="detail">
    <h1>Détails de <?= $pokemon->getName(); ?></h1>
    <figure class="pokemon-detail">
        <img src="<?= $baseUrl . '/assets/img/' . $pokemon->getNumber() . '.png' ?>" alt="<?= $pokemon->getName(); ?>">
        <figcaption>
            <h2>#<?= $pokemon->getNumber(); ?> <?= $pokemon->getName(); ?></h2>
            <ul class="detail-type-list">
                <?php foreach($pokemonTypes as $type): ?>
                <a href="<?= $router->generate('type-detail', ['id' => $type->getId()]) ?>">
                    <li style="background-color: #<?= $type->getColor(); ?>;"><?= $type->getName(); ?></li>
                </a>
                <?php endforeach; ?>
            </ul>
            <h3>Statistiques</h3>
            <section class="stats">
                    <ul>
                        <li>
                            <span>PV</span>
                            <span class="stats-value"><?= $pokemon->getHp(); ?></span>
                            <span class="meter"><span class="meter-value" style="width: <?= $pokemon->getHp() * 100 / 180; ?>%;"></span></span>
                        </li>
                        <li>
                            <span>Attaque</span>
                            <span class="stats-value"><?= $pokemon->getAttack(); ?></span>
                            <span class="meter"><span class="meter-value" style="width: <?= $pokemon->getAttack() * 100 / 180; ?>%;"></span></span>
                        </li>
                        <li>
                            <span>Défense</span>
                            <span class="stats-value"><?= $pokemon->getDefense(); ?></span>
                            <span class="meter"><span class="meter-value" style="width: <?= $pokemon->getDefense() * 100 / 180; ?>%;"></span></span>
                        </li>
                        <li>
                            <span>Attaque Spé.</span>
                            <span class="stats-value"><?= $pokemon->getSpeAttack(); ?></span>
                            <span class="meter"><span class="meter-value" style="width: <?= $pokemon->getSpeAttack() * 100 / 180; ?>%;"></span></span>
                        </li>
                        <li>
                            <span>Défense Spé.</span>
                            <span class="stats-value"><?= $pokemon->getSpeDefense(); ?></span>
                            <span class="meter"><span class="meter-value" style="width: <?= $pokemon->getSpeDefense() * 100 / 180; ?>%;"></span></span>
                        </li>
                        <li>
                            <span>Vitesse</span>
                            <span class="stats-value"><?= $pokemon->getSpeed(); ?></span>
                            <span class="meter"><span class="meter-value" style="width: <?= $pokemon->getSpeed() * 100 / 180; ?>%;"></span></span>
                        </li>
                    </ul>
            </section>
        </figcaption>
    </figure>
    <a href="<?= $router->generate('home') ?>">Revenir à la liste</a>
</article>
