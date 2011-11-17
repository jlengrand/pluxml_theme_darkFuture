	<?php if(!defined('PLX_ROOT')) exit; ?>

	<div id="aside">
		
		<h3><?php $plxShow->lang('C_CONTACT') ?></h3>
		<ul id="icons">
            <li><a href="<?php echo GP ?>"><img src="<?php echo GP_H ?>" style="border:0" alt="google plus profile" title="Find me on G+" height="40" width="40" /></a></li>
            <li><a href="<?php echo VIADEO ?>"><img src="<?php echo VIADEO_H ?>" style="border:0" alt="viadeo profile" title="Find me on Viadeo" height="40" width="40" /></a></li>
            <li><a href="<?php echo LINKEDIN ?>"><img src="<?php echo LINKEDIN_H ?>" style="border:0" alt="linkedin profile" title="Find me on Linkedin" height="40" width="40" /></a></li>
            <li><a href="<?php echo TWITTER ?>"><img src="<?php echo TWITTER_H ?>" style="border:0" alt="twitter profile" title="Follow me on Twitter" height="40" width="40" /></a></li>
            <li><a href="<?php echo MAILTO ?>"><img src="<?php echo MAILTO_H ?>" style="border:0" alt="mailto" title="Mail me!" height="40" width="40" /></a></li>
            <li><a href="http://feeds.feedburner.com/LookUpToTheFuture"><img src="<?php echo RSS_H ?>" style="border:0" alt="rss " title="Follow the news" height="40" width="40" /></a></li>
		</ul>

        <h3><?php $plxShow->lang('C_NEWS') ?></h3>
           <ul>
               <?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?> 
           </ul>
	
	    <h3><?php $plxShow->lang('C_PARTNERS') ?></h3>
		<ul id="partners">
		    <li><a href="<?php echo DARTH ?>" title="<?php $plxShow->lang('C_DARTH') ?>"><?php $plxShow->lang('C_DARTH') ?></a></li>
		    <li><a href="<?php echo ARP ?>" title="<?php $plxShow->lang('C_ARP') ?>"><?php $plxShow->lang('C_ARP') ?></a></li>
		    <li><a href="<?php echo CRUNCH ?>" title="<?php $plxShow->lang('C_CRUNCH') ?>"><?php $plxShow->lang('C_CRUNCH') ?></a></li>
		    <li><a href="<?php echo DEBIAN ?>" title="<?php $plxShow->lang('C_DEB') ?>"><?php $plxShow->lang('C_DEB') ?></a></li>
		    <li><a href="<?php echo STACK ?>" title="<?php $plxShow->lang('C_STACK') ?>"><?php $plxShow->lang('C_STACK') ?></a></li>
		</ul>
        
		<a href="http://linuxcounter.net/" id="certificate">
			<img alt="This image displayed my linux certificate as a certified linux user. " src="<?php echo CERTIF_H ?>" title="linux certificate" />
		</a>
                <a href="http://validator.w3.org/check?uri=referer" id="validation"><img
                  src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
</div>
