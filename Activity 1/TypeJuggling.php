<?php
$name = 'Invoker';

$quas = [
    'Q + Q + Q' => 'Cold Snap',
    'Q + Q + W' => 'Ghost Walk',
    'Q + Q + E' => 'Ice Wall',
];

$wex = [
    'W + W + W' => 'E.M.P',
    'W + W + Q' => 'Tornado',
    'W + W + E' => 'Alacrity',
];

$exort = [
    'E + E + E' => 'Sunstrike',
    'E + E + Q' => 'Forge Spirits',
    'E + E + W' => 'Chaos Meteor',
];

$invokeCombo = [
    'Q + W + E' => 'Deafening Blast',
];

$total = '10';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Invoker Hero Spotlight (Type Juggling)</title>
    <link rel="stylesheet" href="css/styles2.css">
</head>
<body>

<h1>
In its earliest, and some would say most potent form, magic was primarily the art of memory. It required no technology, no wands or appurtenances other than the mind of the magician. All the trappings of ritual were merely mnemonic devices, meant to allow the practitioner to recall in rich detail the specific mental formulae that unlocked a spell's power. <br>

<br>The greatest mages in those days were the ones blessed with the greatest memories, and yet so complex were the invocations that all wizards were forced to specialize. The most devoted might hope in a lifetime to have adequate recollection of three spells--four at most. Ordinary wizards were content to know two, and it was not uncommon for a village mage to know only one--with even that requiring him to consult grimoires as an aid against forgetfulness on the rare occasions when he might be called to use it.<br>

<br>But among these early practitioners there was one exception, a genius of vast intellect and prodigious memory who came to be known as the <?= $name ?>. In his youth, the precocious wizard mastered not four, not five, not even seven incantations: He could command no fewer than ten spells, and cast them instantly. Many more he learned but found useless, and would practice once then purge from his mind forever, to make room for more practical invocations. One such spell was the Sempiternal Cantrap--a longevity spell of such power that those who cast it in the world's first days are among us still (unless they have been crushed to atoms).<br>

<br>Most of these quasi-immortals live quietly, afraid to admit their secret: But <?= $name ?> is not one to keep his gifts hidden. He is ancient, learned beyond all others, and his mind somehow still has space to contain an immense sense of his own worth...as well as the Invocations with which he amuses himself through the long slow twilight of the world's dying days.<br>
</h1>

<h2>Invoker's Spells</h2>

<h3>Quas Spells</h3>
<ul>
    <?php foreach ($quas as $combo => $spell): ?>
        <li><?= $combo ?> - <?= $spell ?></li>
    <?php endforeach; ?>
</ul>

<h3>Wex Spells</h3>
<ul>
    <?php foreach ($wex as $combo => $spell): ?>
        <li><?= $combo ?> - <?= $spell ?></li>
    <?php endforeach; ?>
</ul>

<h3>Exort Spells</h3>
<ul>
    <?php foreach ($exort as $combo => $spell): ?>
        <li><?= $combo ?> - <?= $spell ?></li>
    <?php endforeach; ?>
</ul>

<h3>Invoke Combination Spell</h3>
<ul>
    <?php foreach ($invokeCombo as $combo => $spell): ?>
        <li><?= $combo ?> - <?= $spell ?></li>
    <?php endforeach; ?>
</ul>

<h2>Total Invokable Spells: <?= $total ?></h2>

</body>
</html>
