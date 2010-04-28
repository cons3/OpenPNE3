<?php slot('submenu') ?>
<?php include_partial('submenu') ?>
<?php end_slot() ?>

<?php slot('title', __('コミュニティ削除')); ?>

<p><?php echo __('本当にこのコミュニティを削除してもよろしいですか？') ?></p>

<form action="<?php url_for('@community_delete?id='.$community->getId()) ?>" method="post">
<?php include_partial('community/communityInfo', array(
  'community' => $community,
  'moreInfo' => array('<input type="submit" value="削除" />')
)); ?>
</form>

