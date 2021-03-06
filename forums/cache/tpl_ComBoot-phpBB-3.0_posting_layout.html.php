<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); if ($this->_rootref['TOPIC_TITLE']) {  ?>

	<div class="page-header">
		<h2><a href="<?php echo (isset($this->_rootref['U_VIEW_TOPIC'])) ? $this->_rootref['U_VIEW_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?></a> &mdash; <?php echo ((isset($this->_rootref['L_POST_A'])) ? $this->_rootref['L_POST_A'] : ((isset($user->lang['POST_A'])) ? $user->lang['POST_A'] : '{ POST_A }')); ?><div ng-show="subject" class="subject">{{": " + subject}}</div></h2>
	</div>
<?php } else { ?>

	<div class="page-header">
		<h2><?php echo ((isset($this->_rootref['L_POST_A'])) ? $this->_rootref['L_POST_A'] : ((isset($user->lang['POST_A'])) ? $user->lang['POST_A'] : '{ POST_A }')); ?><div ng-show="subject" class="subject">{{"&#58; " + subject}}</div></h2>
	</div>
<?php } if ($this->_rootref['S_FORUM_RULES']) {  ?>

	<div class="rules">
        <div class="alert alert-warning">
            <?php if ($this->_rootref['U_FORUM_RULES']) {  ?>

                <a href="<?php echo (isset($this->_rootref['U_FORUM_RULES'])) ? $this->_rootref['U_FORUM_RULES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></a>
            <?php } else { ?>

                <i class="fa fa-exclamation-triangle"></i> <strong><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></strong>
                <hr class="message-inner-separator">
            	<p><?php echo (isset($this->_rootref['FORUM_RULES'])) ? $this->_rootref['FORUM_RULES'] : ''; ?></p>
            <?php } ?>

        </div>
    </div>
<?php } ?>


<form id="postform" method="post" action="<?php echo (isset($this->_rootref['S_POST_ACTION'])) ? $this->_rootref['S_POST_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
	<?php if ($this->_rootref['S_DRAFT_LOADED']) {  ?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?></h3>
			</div>
			<div class="panel-body">
				<p><?php echo ((isset($this->_rootref['L_DRAFT_LOADED'])) ? $this->_rootref['L_DRAFT_LOADED'] : ((isset($user->lang['DRAFT_LOADED'])) ? $user->lang['DRAFT_LOADED'] : '{ DRAFT_LOADED }')); ?></p>
			</div>
		</div>
	<?php } if ($this->_rootref['S_SHOW_DRAFTS']) {  $this->_tpl_include('drafts.html'); } if ($this->_rootref['S_POST_REVIEW']) {  $this->_tpl_include('posting_review.html'); } if ($this->_rootref['S_UNGLOBALISE']) {  ?>

		<div class="panel row bg3">
			<div class="well">
				<fieldset class="fields1">
					<h2><?php echo ((isset($this->_rootref['L_SELECT_DESTINATION_FORUM'])) ? $this->_rootref['L_SELECT_DESTINATION_FORUM'] : ((isset($user->lang['SELECT_DESTINATION_FORUM'])) ? $user->lang['SELECT_DESTINATION_FORUM'] : '{ SELECT_DESTINATION_FORUM }')); ?></h2>
					<p><?php echo ((isset($this->_rootref['L_UNGLOBALISE_EXPLAIN'])) ? $this->_rootref['L_UNGLOBALISE_EXPLAIN'] : ((isset($user->lang['UNGLOBALISE_EXPLAIN'])) ? $user->lang['UNGLOBALISE_EXPLAIN'] : '{ UNGLOBALISE_EXPLAIN }')); ?></p>
					<dl>
						<dt><label for="to_forum_id"><?php echo ((isset($this->_rootref['L_MOVE'])) ? $this->_rootref['L_MOVE'] : ((isset($user->lang['MOVE'])) ? $user->lang['MOVE'] : '{ MOVE }')); ?>:</label></dt>
						<dd><select id="to_forum_id" name="to_forum_id"><?php echo (isset($this->_rootref['S_FORUM_SELECT'])) ? $this->_rootref['S_FORUM_SELECT'] : ''; ?></select></dd>
					</dl>
					
					<dl>
						<dt>&nbsp;</dt>
						<dd><input class="btn btn-default" type="submit" name="post" value="<?php echo ((isset($this->_rootref['L_CONFIRM'])) ? $this->_rootref['L_CONFIRM'] : ((isset($user->lang['CONFIRM'])) ? $user->lang['CONFIRM'] : '{ CONFIRM }')); ?>" />
						<input class="btn btn-danger" type="submit" name="cancel_unglobalise" value="<?php echo ((isset($this->_rootref['L_CANCEL'])) ? $this->_rootref['L_CANCEL'] : ((isset($user->lang['CANCEL'])) ? $user->lang['CANCEL'] : '{ CANCEL }')); ?>" /></dd>
					</dl>
				</fieldset>
			</div>
		</div>
	<?php } if ($this->_rootref['S_DISPLAY_PREVIEW']) {  $this->_tpl_include('posting_preview.html'); } ?>


	<div class="panel panel-default" id="postingbox">
		<div class="panel-body no-margin">	
			<?php $this->_tpldata['DEFINE']['.']['EXTRA_POSTING_OPTIONS'] = 1; $this->_tpl_include('posting_editor.html'); if ($this->_rootref['S_DISPLAY_REVIEW']) {  $this->_tpl_include('posting_topic_review.html'); } ?>

		</div>
		<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</div>
</form>

<?php if (! $this->_rootref['S_PRIVMSGS']) {  ?>

	<script type="text/javascript">
	// <![CDATA[
		subPanels(show_panel);
	// ]]>
	</script>
<?php } $this->_tpl_include('overall_footer.html'); ?>