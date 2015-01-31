@extends('layouts.default')
@section('main')
	<div class="g-bd f-cb">
	    <div id="box" class="m-box">
	        <input type="button" id="input" class="w-btn" value = "生成卡片"/>
	    </div>
	</div>
@stop
@section('scripts')
	<script type="text/javascript">
	var f = function(){
	var _  = NEJ.P,
    	_e = _('nej.e'),
    	_o = NEJ.P('nej.o'),
    	_v = NEJ.P('nej.v'),
    	_ui = NEJ.P('nej.ui'),
    	_p = _('nej.demo'),
    	_proCustCard,
    	_supCustCard;
	var _seed_css = _e._$pushCSSText('.#<uispace>{background:#fff;line-height:26px;width:140px;}\
	        .#<uispace> .itm{color:#000;text-decoration:none;cursor:pointer;display:inline-block;*zoom:1}\
			.#<uispace> .itm:hover{background-color:#ccc;text-decoration:none;}');
	    // ui html code
	    var _seed_html = _e._$addNodeTemplate('<div class="'+_seed_css+'">\
	    		 									<a class="itm pnt" href="javascript:void(0)">相册属性</a>\
	    											<a class="itm pnt" href="javascript:void(0)">相册封面</a> \
	    											<a class="itm pnt" href="javascript:void(0)">推送相册</a> \
	    											<a class="itm pnt" href="javascript:void(0)">删除相册</a>\
	    											<a class="itm pnt" href="javascript:void(0)">相片说明</a> \
	    											<a class="itm pnt" href="javascript:void(0)">批量管理</a> \
	    											<a class="itm pnt" href="javascript:void(0)">相片排序</a>\
	    									   </div>');
	
	
	_p._$$CustCard = NEJ.C();
	_proCustCard = _p._$$CustCard._$extend(_ui._$$CardWrapper, !0);
	_supCustCard = _p._$$CustCard.prototype;
	
	/**
	 * 初始化外观信息
	 * 
	 * @return {Void}
	 */
	_proCustCard.__initXGui = function() {
		this.__seed_css = _seed_css;
		this.__seed_html = _seed_html;
	};
	/**
	 * 控件重置
	 * 
	 * @param {Object}
	 *            _options 可选配置参数 
	 *            	itemclick	卡片点击回调
	 * @return {Void}
	 */
	_proCustCard.__reset = function(_options) {
		this.__supReset(_options);
	};
	/**
	 * 初始化节点
	 * 
	 * @return {Void}
	 */
	_proCustCard.__initNode = function() {
		this.__supInitNode();
		_v._$addEvent(this.__body, 'click', this.__addCardItemClick._$bind(this));
	};
	/**
	 * card点击回调
	 */
	_proCustCard.__addCardItemClick = function(_event){
		var _elm = _v._$getElement(_event);
		this._$dispatchEvent('itemclick',_elm.innerHTML);
		this.__destroy();
	};
	
	var _input = _e._$get('input');
	_p._$$CustCard._$attach(_input,{parent:document.body,align:'bottom left',itemclick:onItemClick,destroyable:true,clazz:'js-card'});
	
	var _card;
    //_v._$addEvent(_input,'click',onNewCardClick);
    function onNewCardClick(_event){
        _v._$stop(_event);
        if(!!_card)_card._$recycle();
        _card = _p._$$CustCard._$allocate({parent:_input.parentNode,itemclick:onItemClick,destroyable:true,clazz:'js-card'});
    };
    
    
    function onItemClick(_item){
    	alert(_item);
    };
};
define(['{lib}ui/layer/card.wrapper.js'], f);
	</script>
@stop