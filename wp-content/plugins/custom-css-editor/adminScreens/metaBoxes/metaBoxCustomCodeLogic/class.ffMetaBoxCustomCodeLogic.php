<?php

class ffMetaBoxCustomCodeLogic extends ffMetaBox {
	protected function _initMetaBox() {
		$this->_addPostType( ffPluginFreshCustomCodeLite::CUSTOMCODE_POST_TYPE_SLUG );
		$this->_setTitle('Custom Code Logic');
		$this->_setContext( ffMetaBox::CONTEXT_NORMAL);
		
		$this->_setParam( ffMetaBox::PARAM_NORMALIZE_OPTIONS, true);
	}
}