<?php
class NationsController extends AppController {
	public function index() {
		$this->layout = 'ajaxComboBox';
		if (isset($this->params['data']['index'])) {
			$this->set('result', ($this->params['data']['index']));
		}
		//The initial value of ComboBox. (Japan)
		$this->set('init_record', 28);
	}
	public function ajax_search() {
		$this->layout = 'ajax';
		$this->set('data', $this->Nation->modelAjaxSearch($this->params['url']));
	}
	public function shorten_url() {
		$this->layout = 'ajax';
		$this->set('data', $this->Nation->shortenByBitly($this->params['url']));
		$this->render('ajax_search');
	}
}
