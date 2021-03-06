<h2><?=lang('news_archive_title');?></h2>
<h3><?=$month_year;?></h3>

<div class="float-left width-two-thirds">
	<? if (!empty($news)): ?>	
		<? foreach ($news as $article): ?>
			<h3><?=anchor('news/' .date('Y/m', $article->created_on) .'/'. $article->slug, $article->title);?></h3>			
			<p><?= nl2br($article->intro) ?> <?= anchor('news/' .date('Y/m', $article->created_on) .'/'. $article->slug, lang('news_read_more_label'))?></p>
			<p>
				<em><?=lang('news_posted_label');?>: <?= date('M d, Y', $article->created_on); ?></em>&nbsp;				
				<? if($article->category_slug): ?>
					<em><?=lang('news_category_label');?>: <?=anchor('news/category/'.$article->category_slug, $article->category_title);?></em>
				<? endif; ?>
			</p>			
			<hr/>
		<? endforeach; ?>		
		<p><?=$pagination['links']; ?></p>		
	<? else: ?>
		<p><?=lang('news_read_more_label');?></p>
	<? endif; ?>
</div>

<div class="float-right width-quater">
	<? $this->load->view('fragments/rss_box') ?>	
	<hr />	
	<? $this->load->view('fragments/archive_box') ?>	
</div>