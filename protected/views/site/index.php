<?php
/**
 * @var yii\base\View $this
 */
 
$this->title = 'Welcome';

$m = array(
	'auth'=>array(
		'label'=>'Auth System',
		'des'=>"Auth Control Your Database Table's Fields",
		'url'=>'auth/site/index',
		'progress'=>5
	),
	'payment'=>array(
		'label'=>'Payment System',
		'des'=>"Payment Drives like alipay, paypal,bankwire ETC",
		'url'=>'payment/site/index',
		'progress'=>0
	),
	'file'=>array(
		'label'=>'File System',
		'des'=>"support upload files and manage files,ajax upload ",
		'url'=>'file/site/index',
		'progress'=>0
	),
	'member'=>array(
		'label'=>'Member System',
		'des'=>"Member Login/Register/Change Password/Rest Password Use Email",
		'url'=>'oauth/site/index',
		'progress'=>0
	),
	'oauth'=>array(
		'label'=>'Oauth System',
		'des'=>"Third Login Support Weibo.com<br> QQ Gmail ETC",
		'url'=>'oauth/site/index',
		'progress'=>0
	),
	
	'media'=>array(
		'label'=>'Simple Media System ',
		'des'=>"Articles  Videos  Albums support <br>easy create articles",
		'url'=>'media/site/index',
		'progress'=>0
	),
	'cart'=>array(
		'label'=>'Cart System ',
		'des'=>"Cart for members, should be install member module",
		'url'=>'cart/site/index',
		'progress'=>0
	),
	'comment'=>array(
		'label'=>'Comment System ',
		'des'=>"Comment very module ,if module support commnet",
		'url'=>'comment/site/index',
		'progress'=>0
	),
	'tag'=>array(
		'label'=>'TAG System ',
		'des'=>"tags in very module ,if module support tag",
		'url'=>'tag/site/index',
		'progress'=>0
	),
	'taxonomy'=>array(
		'label'=>'Taxonomy System ',
		'des'=>"taxonomy in very module ,if module support taxonomy",
		'url'=>'taxonomy/site/index',
		'progress'=>0
	),
		
);
?>
 
<h2>Modules</h2>
 

<!-- Example row of columns -->
<div class="row-fluid">
	<?php $str="";$i=1;foreach($m as $k=>$v){ ?>
	<div class="span4 well">
		<h3> <?php echo $v['label'];?> </h3> 
		<p> 
			<?php echo $v['des'];?> 
			<div class="progress">
			  <div class="bar" style="width: <?php echo $v['progress'];?>%;"></div>
			</div>
		</p> 
		<p><a class="btn" href="<?php echo url($v['url']);?>"><?php echo __('View');?></a></p>
	</div>
 	<?php if($i%3==0) echo "<div class='row-fluid'>"; $str .= "</div>";$i++;} echo $str;?>
	 
</div>

