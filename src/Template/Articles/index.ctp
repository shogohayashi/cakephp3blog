<div>
  <div id="index">
    <h1>コンテンツ</h1>
    <div class="row">
      <ul>
          <?php foreach ($articles as $article): ?>
            <li>
                <span class="title"><?= $this->Html->link($article->title,['action' => 'view', $article->id]) ?></span>
                <span class="date">・・・・・・・・・・・・・・・・・<?= $this->Time->format( $article->created,'YY/mm/dd',null); ?></span></li>
          <?php endforeach; ?>
      </ul>
      <hr />
    </div>
  </div>
  <div class="paginator">
      <ul class="pagination">
          <?= $this->Paginator->first('<< ' . __('first')) ?>
          <?= $this->Paginator->prev('< ' . __('previous')) ?>
          <?= $this->Paginator->numbers() ?>
          <?= $this->Paginator->next(__('next') . ' >') ?>
          <?= $this->Paginator->last(__('last') . ' >>') ?>
      </ul>
      <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
  </div>

  <div class="row">
    <div class="columns large-12">
      <h3>About</h3>

    </div>
  </div>
</div>
<style>

</style>
