<?php
/**
 * 
 * The author is Duong Tien Dung | XIPAT Flexible Solutions http://www.xipat.com
 * 
 * @version		1.0
 * @package     Joomla.site	
 * @subpackage  com_oauth
 * @copyright   Copyright (C) 2013 XIPAT Flexible Solutions. All rights reserved.
 * @license     GNU / GPL version 2 or later
 */

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');

?>
<link rel="stylesheet" href="<?php echo JURI::root()."components/com_oauth/assests/css/style-backend.css";?>" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>
$(function(){
    $("ul li").click(function(){
		$('li[fname="'+$(this).attr('fname')+'"]').removeClass("on");
                $(this).addClass("on"); 
		//$('#'+$(this).attr('fname')).val($(this).attr('fval'));
		$('input[name="'+$(this).attr('fname')+'"]').val($(this).attr('fval'));
		if ($(this).attr('fval')=='1') {
			$('div[rel="'+$(this).attr('fname')+'"]').show();
		} else {
			$('div[rel="'+$(this).attr('fname')+'"]').hide();
		}
    });
});
</script>

<div id="wrap-oauth">
<form action="<?php echo JRoute::_('index.php?option=com_oauth&view=config');?>" method="post" name="adminForm" id="adminForm">
	
    <div class="clr"></div>
    <div class="w100 redirect">Redirect / Call Back URL: <input type="text" value="<?php echo JURI::root()."index.php?option=com_oauth&task=login.endpoint"; ?>" name="redirect_url" onclick="this.focus(); this.select();"/></div>

    <div class="w100"><div class="xp-oauth-block"><div class="padding">
        <h3>User pick Username</h3>
        <div class="float-right">
            <ul>
                <li fname='jFormconfig[enableRegister]' fval='0' rel="jFormconfig[enableRegister]" <?php echo !$this->config['enableRegister']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>
                <li fname='jFormconfig[enableRegister]' fval='1' rel="jFormconfig[enableRegister]" <?php echo $this->config['enableRegister']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>
            </ul>
        </div>
        <input name="jFormconfig[enableRegister]" id="jFormconfig[enableRegister]"  type="hidden" value="<?php echo (int)$this->config['enableRegister']; ?>" />
    </div></div></div>
    <!-- -->
    <div class="w100"><div class="xp-oauth-block"><div class="padding">
        <h3 class="facebook"><span></span>Facebook</h3>
        <div class="float-right">
            <ul>
                <li fname='jFormconfig[providers][Facebook][enabled]' fval='0' rel="jFormconfig[providers][Facebook][enabled]" <?php echo !$this->config['providers']['Facebook']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>
                <li fname='jFormconfig[providers][Facebook][enabled]' fval='1' rel="jFormconfig[providers][Facebook][enabled]" <?php echo $this->config['providers']['Facebook']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>
            </ul>
        </div>
        <div rel="jFormconfig[providers][Facebook][enabled]" <?php echo !$this->config['providers']['Facebook']['enabled']?" style='display:none'":"" ?>>
            <div class="config-option-list">
                <div class="w100">
                    <label>Application ID</label>
                    <input type="text" name="jFormconfig[providers][Facebook][keys][id]" value="<?php echo $this->config['providers']['Facebook']['keys']['id']?$this->config['providers']['Facebook']['keys']['id']:"" ?>"/>
                </div>
                <div class="w100">
                    <label>Application Secret</label>
                    <input type="text" name="jFormconfig[providers][Facebook][keys][secret]" value="<?php echo $this->config['providers']['Facebook']['keys']['secret']?$this->config['providers']['Facebook']['keys']['secret']:""; ?>"/>
                </div>
            </div>
            <a title="How to use Facebook?" href="http://hybridauth.sourceforge.net/userguide/IDProvider_info_Facebook.html" target="_blank" class="icon-help"></a>
            <input name="jFormconfig[providers][Facebook][enabled]" id="jFormconfig[providers][Facebook][enabled]"  type="hidden" value="<?php echo (int)$this->config['providers']['Facebook']['enabled']; ?>" />
            <input name="jFormconfig[providers][Facebook][display]" value="popup" type="hidden" />
        </div>
        
    </div></div></div>
    <!-- -->
    <div class="w100"><div class="xp-oauth-block"><div class="padding">
        <h3 class="twitter"><span></span>Twitter</h3>
        <div class="float-right">
            <ul>
                <li fname='jFormconfig[providers][Twitter][enabled]' fval='0' rel="jFormconfig[providers][Twitter][enabled]" <?php echo !$this->config['providers']['Twitter']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>
                <li fname='jFormconfig[providers][Twitter][enabled]' fval='1' rel="jFormconfig[providers][Twitter][enabled]" <?php echo $this->config['providers']['Twitter']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>
            </ul>
        </div>
        <div rel="jFormconfig[providers][Twitter][enabled]" <?php echo !$this->config['providers']['Twitter']['enabled']?" style='display:none'":"" ?>>
            <div class="config-option-list">
                <div class="w100">
                    <label>Application ID</label>
                    <input type="text" name="jFormconfig[providers][Twitter][keys][key]" value="<?php echo $this->config['providers']['Twitter']['keys']['key']?$this->config['providers']['Twitter']['keys']['key']:"" ?>"/>
                </div>
                <div class="w100">
                    <label>Application Secret</label>
                    <input type="text" name="jFormconfig[providers][Twitter][keys][secret]" value="<?php echo $this->config['providers']['Twitter']['keys']['secret']?$this->config['providers']['Twitter']['keys']['secret']:""; ?>"/>
                </div>
            </div>
            <a title="How to use Twitter?" href="http://hybridauth.sourceforge.net/userguide/IDProvider_info_Twitter.html" target="_blank" class="icon-help"></a>
            <input id="jFormconfig[providers][Twitter][enabled]" name="jFormconfig[providers][Twitter][enabled]" type="hidden" value="<?php echo (int)$this->config['providers']['Twitter']['enabled']; ?>" />
        </div>
    </div></div></div>
    <!-- -->
    <div class="w100"><div class="xp-oauth-block"><div class="padding">
        <h3 class="google"><span></span>Google</h3>
        <div class="float-right">
            <ul>
                <li fname='jFormconfig[providers][Google][enabled]' fval='0' rel="jFormconfig[providers][Google][enabled]" <?php echo !$this->config['providers']['Google']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>
                <li fname='jFormconfig[providers][Google][enabled]' fval='1' rel="jFormconfig[providers][Google][enabled]" <?php echo $this->config['providers']['Google']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>
            </ul>
            
        </div>
        <div rel="jFormconfig[providers][Google][enabled]" <?php echo !$this->config['providers']['Google']['enabled']?" style='display:none'":"" ?>>
            <div class="config-option-list">
                <div class="w100">
                    <label>Application ID</label>
                    <input type="text" name="jFormconfig[providers][Google][keys][id]" value="<?php echo $this->config['providers']['Google']['keys']['id']?$this->config['providers']['Google']['keys']['id']:"" ?>"/>
                </div>
                <div class="w100">
                    <label>Application Secret</label>
                    <input type="text" name="jFormconfig[providers][Google][keys][secret]" value="<?php echo $this->config['providers']['Google']['keys']['secret']?$this->config['providers']['Google']['keys']['secret']:""; ?>"/>
                </div>
                <div class="w100">
                    <label>Redirect URL</label> <input type="text" style="font-size:16px;" value="<?php echo JURI::root()."index.php?option=com_oauth&task=login.endpoint&hauth.done=Google"; ?>" name="redirect_url_google" onclick="this.focus(); this.select();"/>
                </div>
            </div>
            <a title="How to use Google?" href="http://hybridauth.sourceforge.net/userguide/IDProvider_info_Google.html" target="_blank" class="icon-help"></a>
            <input id="jFormconfig[providers][Google][enabled]" name="jFormconfig[providers][Google][enabled]" type="hidden" value="<?php echo (int)$this->config['providers']['Google']['enabled']; ?>" />
        </div>
    </div></div></div>
    <!-- -->
    <div class="w100"><div class="xp-oauth-block"><div class="padding">
        <h3 class="yahoo"><span></span>Yahoo</h3>
        <div class="float-right">
            <ul>
                <li fname='jFormconfig[providers][Yahoo][enabled]' fval='0' rel="jFormconfig[providers][Yahoo][enabled]" <?php echo !$this->config['providers']['Yahoo']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>
                <li fname='jFormconfig[providers][Yahoo][enabled]' fval='1' rel="jFormconfig[providers][Yahoo][enabled]" <?php echo $this->config['providers']['Yahoo']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>
            </ul>
        </div>
        <div rel="jFormconfig[providers][Yahoo][enabled]" <?php echo !$this->config['providers']['Yahoo']['enabled']?" style='display:none'":"" ?>>
            <div class="config-option-list">
                <div class="w100">
                    <label>Application ID</label>
                    <input type="text" name="jFormconfig[providers][Yahoo][keys][key]" value="<?php echo $this->config['providers']['Yahoo']['keys']['key']?$this->config['providers']['Yahoo']['keys']['key']:"" ?>"/>
                </div>
                <div class="w100">
                    <label>Application Secret</label>
                    <input type="text" name="jFormconfig[providers][Yahoo][keys][secret]" value="<?php echo $this->config['providers']['Yahoo']['keys']['secret']?$this->config['providers']['Yahoo']['keys']['secret']:""; ?>"/>
                </div>
            </div>
            <a title="How to use Yahoo?" href="http://hybridauth.sourceforge.net/userguide/IDProvider_info_Yahoo.html" target="_blank" class="icon-help"></a>
            <input id="jFormconfig[providers][Yahoo][enabled]" name="jFormconfig[providers][Yahoo][enabled]" type="hidden" value="<?php echo (int)$this->config['providers']['Yahoo']['enabled']; ?>" />
        </div>
    </div></div></div>
    <!-- -->
    <div class="w100"><div class="xp-oauth-block"><div class="padding">
        <h3 class="live"><span></span>Live</h3>
        <div class="float-right">
            <ul>
                <li fname='jFormconfig[providers][Live][enabled]' fval='0' rel="jFormconfig[providers][Live][enabled]" <?php echo !$this->config['providers']['Live']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>
                <li fname='jFormconfig[providers][Live][enabled]' fval='1' rel="jFormconfig[providers][Live][enabled]" <?php echo $this->config['providers']['Live']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>
            </ul>
        </div>
        <div rel="jFormconfig[providers][Live][enabled]" <?php echo !$this->config['providers']['Live']['enabled']?" style='display:none'":"" ?>>
            <div class="config-option-list">
                <div class="w100">
                    <label>Application ID</label>
                    <input type="text" name="jFormconfig[providers][Live][keys][id]" value="<?php echo $this->config['providers']['Live']['keys']['id']?$this->config['providers']['Live']['keys']['id']:"" ?>"/>
                </div>
                <div class="w100">
                    <label>Application Secret</label>
                    <input type="text" name="jFormconfig[providers][Live][keys][secret]" value="<?php echo $this->config['providers']['Live']['keys']['secret']?$this->config['providers']['Live']['keys']['secret']:""; ?>"/>
                </div>
            </div>
            <a title="How to use Windows Live?" href="http://hybridauth.sourceforge.net/userguide/IDProvider_info_Live.html" target="_blank" class="icon-help"></a>
            <input id="jFormconfig[providers][Live][enabled]" name="jFormconfig[providers][Live][enabled]" type="hidden" value="<?php echo (int)$this->config['providers']['Live']['enabled']; ?>" />
        </div>
    </div></div></div>
    <!-- -->
    <div class="w100"><div class="xp-oauth-block"><div class="padding">
        <h3 class="linkedin"><span></span>LinkedIn</h3>
        <div class="float-right">
            <ul>
                <li fname='jFormconfig[providers][LinkedIn][enabled]' fval='0' rel="jFormconfig[providers][LinkedIn][enabled]" <?php echo !$this->config['providers']['LinkedIn']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>
                <li fname='jFormconfig[providers][LinkedIn][enabled]' fval='1' rel="jFormconfig[providers][LinkedIn][enabled]" <?php echo $this->config['providers']['LinkedIn']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>
            </ul>
        </div>
        <div rel="jFormconfig[providers][LinkedIn][enabled]" <?php echo !$this->config['providers']['LinkedIn']['enabled']?" style='display:none'":"" ?>>
            <div class="config-option-list">
                <div class="w100">
                    <label>Application ID</label>
                    <input type="text" name="jFormconfig[providers][LinkedIn][keys][key]" value="<?php echo $this->config['providers']['LinkedIn']['keys']['key']?$this->config['providers']['LinkedIn']['keys']['key']:"" ?>"/>
                </div>
                <div class="w100">
                    <label>Application Secret</label>
                    <input type="text" name="jFormconfig[providers][LinkedIn][keys][secret]" value="<?php echo $this->config['providers']['LinkedIn']['keys']['secret']?$this->config['providers']['LinkedIn']['keys']['secret']:""; ?>"/>
                </div>
            </div>
            <a title="How to use LinkedIn?" href="http://hybridauth.sourceforge.net/userguide/IDProvider_info_LinkedIn.html" target="_blank" class="icon-help"></a>
            <input id="jFormconfig[providers][LinkedIn][enabled]" name="jFormconfig[providers][LinkedIn][enabled]" type="hidden" value="<?php echo (int)$this->config['providers']['LinkedIn']['enabled']; ?>" />
        </div>
    </div></div></div>
    <!-- -->
    <div class="w100"><div class="xp-oauth-block"><div class="padding">
        <h3 class="foursquare"><span></span>Foursquare</h3>
        <div class="float-right">
            <ul>
                <li fname='jFormconfig[providers][Foursquare][enabled]' fval='0' rel="jFormconfig[providers][Foursquare][enabled]" <?php echo !$this->config['providers']['Foursquare']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>
                <li fname='jFormconfig[providers][Foursquare][enabled]' fval='1' rel="jFormconfig[providers][Foursquare][enabled]" <?php echo $this->config['providers']['Foursquare']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>
            </ul>
        </div>
        <div rel="jFormconfig[providers][Foursquare][enabled]" <?php echo !$this->config['providers']['Foursquare']['enabled']?" style='display:none'":"" ?>>
            <div class="config-option-list">
                <div class="w100">
                    <label>Application ID</label>
                    <input type="text" name="jFormconfig[providers][Foursquare][keys][id]" value="<?php echo $this->config['providers']['Foursquare']['keys']['id']?$this->config['providers']['Foursquare']['keys']['id']:"" ?>"/>
                </div>
                <div class="w100">
                    <label>Application Secret</label>
                    <input type="text" name="jFormconfig[providers][Foursquare][keys][secret]" value="<?php echo $this->config['providers']['Foursquare']['keys']['secret']?$this->config['providers']['Foursquare']['keys']['secret']:""; ?>"/>
                </div>
            </div>
            <a title="How to use Foursquare?" href="http://hybridauth.sourceforge.net/userguide/IDProvider_info_Foursquare.html" target="_blank" class="icon-help"></a>
            <input id="jFormconfig[providers][Foursquare][enabled]" name="jFormconfig[providers][Foursquare][enabled]" type="hidden" value="<?php echo (int)$this->config['providers']['Foursquare']['enabled']; ?>" />
        </div>
    </div></div></div>
    <!-- -->
    <div class="w100"><div class="xp-oauth-block"><div class="padding">
        <h3 class="myspace"><span></span>MySpace</h3>
        <div class="float-right">
            <ul>
                <li fname='jFormconfig[providers][MySpace][enabled]' fval='0' rel="jFormconfig[providers][MySpace][enabled]" <?php echo !$this->config['providers']['MySpace']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>
                <li fname='jFormconfig[providers][MySpace][enabled]' fval='1' rel="jFormconfig[providers][MySpace][enabled]" <?php echo $this->config['providers']['MySpace']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>
            </ul>
        </div>
        <div rel="jFormconfig[providers][MySpace][enabled]" <?php echo !$this->config['providers']['MySpace']['enabled']?" style='display:none'":"" ?>>
            <div class="config-option-list">
                <div class="w100">
                    <label>Application ID</label>
                    <input type="text" name="jFormconfig[providers][MySpace][keys][id]" value="<?php echo $this->config['providers']['MySpace']['keys']['id']?$this->config['providers']['MySpace']['keys']['id']:"" ?>"/>
                </div>
                <div class="w100">
                    <label>Application Secret</label>
                    <input type="text" name="jFormconfig[providers][MySpace][keys][secret]" value="<?php echo $this->config['providers']['MySpace']['keys']['secret']?$this->config['providers']['MySpace']['keys']['secret']:""; ?>"/>
                </div>
            </div>
            <a title="How to use MySpace?" href="http://hybridauth.sourceforge.net/userguide/IDProvider_info_MySpace.html" target="_blank" class="icon-help"></a>
            <input id="jFormconfig[providers][MySpace][enabled]" name="jFormconfig[providers][MySpace][enabled]" type="hidden" value="<?php echo (int)$this->config['providers']['MySpace']['enabled']; ?>" />
        </div>
    </div></div></div>
    <!-- -->				<div class="w100"><div class="xp-oauth-block"><div class="padding">			<h3 class="EveSSO"><span></span>EveSSO</h3>			<div class="float-right">				<ul>					<li fname='jFormconfig[providers][EveSSO][enabled]' fval='0' rel="jFormconfig[providers][EveSSO][enabled]" <?php echo !$this->config['providers']['EveSSO']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>					<li fname='jFormconfig[providers][EveSSO][enabled]' fval='1' rel="jFormconfig[providers][EveSSO][enabled]" <?php echo $this->config['providers']['EveSSO']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>				</ul>			</div>
           <div rel="jFormconfig[providers][EveSSO][enabled]" <?php echo !$this->config['providers']['EveSSO']['enabled']?" style='display:none'":"" ?>>            <div class="config-option-list">                <div class="w100">                    <label>Application ID</label>                    <input type="text" name="jFormconfig[providers][EveSSO][keys][id]" value="<?php echo $this->config['providers']['EveSSO']['keys']['id']?$this->config['providers']['EveSSO']['keys']['id']:"" ?>"/>                </div>                <div class="w100">                    <label>Application Secret</label>                    <input type="text" name="jFormconfig[providers][EveSSO][keys][secret]" value="<?php echo $this->config['providers']['EveSSO']['keys']['secret']?$this->config['providers']['EveSSO']['keys']['secret']:""; ?>"/>                </div>            </div>            <a title="How to use EveSSO?" href="https://developers.eveonline.com/" target="_blank" class="icon-help"></a>            <input id="jFormconfig[providers][EveSSO][enabled]" name="jFormconfig[providers][EveSSO][enabled]" type="hidden" value="<?php echo (int)$this->config['providers']['EveSSO']['enabled']; ?>" />        </div>    </div></div></div>
    <div class="w100"><div class="xp-oauth-block"><div class="padding">
        <h3 class="aol"><span></span>AOL</h3>
        <div class="float-right">
            <ul>
                <li fname='jFormconfig[providers][AOL][enabled]' fval='0' rel="jFormconfig[providers][AOL][enabled]" <?php echo !$this->config['providers']['AOL']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Disable</a></li>
                <li fname='jFormconfig[providers][AOL][enabled]' fval='1' rel="jFormconfig[providers][AOL][enabled]" <?php echo $this->config['providers']['AOL']['enabled']?" class='on'":"" ?>><a style="cursor:pointer">Enable</a></li>
            </ul>
        </div>
        <input id="jFormconfig[providers][AOL][enabled]" name="jFormconfig[providers][AOL][enabled]" type="hidden" value="<?php echo (int)$this->config['providers']['AOL']['enabled']; ?>" />
    </div></div></div>

    <div>
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="boxchecked" value="0" />
        <?php echo JHtml::_('form.token'); ?>
    </div>
    
</form>
</div>