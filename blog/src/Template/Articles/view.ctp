<div>
  <div id="index">
    <div class="timestamp">最終更新 : <?= $article->modified ?></div>
    <h1><?= $article->title ?></h1>
    <article id="contents" class="markdown"><?= h($article->discription) ?></article>
  </div>
  <hr>

</div>
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<?= $this->Html->css('markdown') ?>
<script>
  let e=document.getElementById("contents");
  e.innerHTML=marked(e.innerHTML.replace(/&lt;/g,'<').replace(/&gt;/g,'>').replace(/&amp;/g,'&'));
</script>
<?= $this->Html->css('highlight/styles/atom-one-light')?>
<script src="/js/highlight/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
