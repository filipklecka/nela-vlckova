<?php
// Expects $breadcrumbs = [ [ 'label' => '...', 'url' => '...'|null ], ... ]
if (!isset($breadcrumbs) || !is_array($breadcrumbs) || count($breadcrumbs) === 0) {
    return;
}
?>
<nav class="breadcrumbs" aria-label="Drobečková navigace">
  <ol>
    <?php foreach ($breadcrumbs as $index => $item): ?>
      <?php
        $label = htmlspecialchars($item['label'] ?? '', ENT_QUOTES, 'UTF-8');
        $url = isset($item['url']) && $item['url'] !== '' ? $item['url'] : null;
        $isCurrent = $url === null || ($index + 1) === count($breadcrumbs);
      ?>
      <li>
        <?php if ($url && !$isCurrent): ?>
          <a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>"><?= $label; ?></a>
        <?php else: ?>
          <span aria-current="page"><?= $label; ?></span>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ol>
</nav>
