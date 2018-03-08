


<ul>
<?php foreach($secrets as $secret):?>
<li><h3><?=$secret['title'];?></h3></li>
<li><p><?=$secret['text']?></p></li>
<li><a href="<?php echo site_url('secret/'.$secret['title']);?>">View secret</a></li>
<?php endforeach;?>
</ul>

