<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<div class="page-header">
	<h2><?php echo ((isset($this->_rootref['L_FAQ_TITLE'])) ? $this->_rootref['L_FAQ_TITLE'] : ((isset($user->lang['FAQ_TITLE'])) ? $user->lang['FAQ_TITLE'] : '{ FAQ_TITLE }')); ?></h2>
</div>

<div class="panel panel-default" id="faqlinks">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-6">
			<?php $_faq_block_count = (isset($this->_tpldata['faq_block'])) ? sizeof($this->_tpldata['faq_block']) : 0;if ($_faq_block_count) {for ($_faq_block_i = 0; $_faq_block_i < $_faq_block_count; ++$_faq_block_i){$_faq_block_val = &$this->_tpldata['faq_block'][$_faq_block_i]; if ($_faq_block_val['SWITCH_COLUMN'] || ( $this->_rootref['SWITCH_COLUMN_MANUALLY'] && $_faq_block_val['S_ROW_COUNT'] == (4) )) {  ?>

			</div>
			<div class="col-md-6">
			<?php } ?>

				<dl class="faq">
					<dt><strong><?php echo $_faq_block_val['BLOCK_TITLE']; ?></strong></dt>
					<?php $_faq_row_count = (isset($_faq_block_val['faq_row'])) ? sizeof($_faq_block_val['faq_row']) : 0;if ($_faq_row_count) {for ($_faq_row_i = 0; $_faq_row_i < $_faq_row_count; ++$_faq_row_i){$_faq_row_val = &$_faq_block_val['faq_row'][$_faq_row_i]; ?>

						<dd><a href="#f<?php echo $_faq_block_val['S_ROW_COUNT']; ?>r<?php echo $_faq_row_val['S_ROW_COUNT']; ?>"><?php echo $_faq_row_val['FAQ_QUESTION']; ?></a></dd>
					<?php }} ?>

				</dl>
			<?php }} ?>

			</div>
		</div>
	</div>
</div>
<div class="clear"></div>
<?php $_faq_block_count = (isset($this->_tpldata['faq_block'])) ? sizeof($this->_tpldata['faq_block']) : 0;if ($_faq_block_count) {for ($_faq_block_i = 0; $_faq_block_i < $_faq_block_count; ++$_faq_block_i){$_faq_block_val = &$this->_tpldata['faq_block'][$_faq_block_i]; ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h2 class="panel-title"><?php echo $_faq_block_val['BLOCK_TITLE']; ?></h2>
		</div>
		<div class="panel-body">
			<?php $_faq_row_count = (isset($_faq_block_val['faq_row'])) ? sizeof($_faq_block_val['faq_row']) : 0;if ($_faq_row_count) {for ($_faq_row_i = 0; $_faq_row_i < $_faq_row_count; ++$_faq_row_i){$_faq_row_val = &$_faq_block_val['faq_row'][$_faq_row_i]; ?>

				<dl class="faq">
					<dt id="f<?php echo $_faq_block_val['S_ROW_COUNT']; ?>r<?php echo $_faq_row_val['S_ROW_COUNT']; ?>"><strong><?php echo $_faq_row_val['FAQ_QUESTION']; ?></strong></dt>
					<dd><?php echo $_faq_row_val['FAQ_ANSWER']; ?></dd>
				</dl>
				<?php if (! $_faq_row_val['S_LAST_ROW']) {  ?><hr class="dashed" /><?php } }} ?>

		</div>
		<div class="panel-footer faq-footer">
			<div class="to-top pull-right"><a href="#faqlinks" class="top" title="<?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?>"><i class="fa fa-chevron-up"></i></a></div>
		</div>
	</div>
<?php }} $this->_tpl_include('jumpbox.html'); $this->_tpl_include('overall_footer.html'); ?>