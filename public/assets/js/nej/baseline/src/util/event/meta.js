/*
 * ------------------------------------------
 * 自定义事件对象实现文件
 * @version  1.0
 * @author   genify(caijf@corp.netease.com)
 * ------------------------------------------
 */
var f = function(){
    var _  = NEJ.P,
        _u = _('nej.u'),
        _p = _('nej.ut'),
        _proMetaEvent;
    if (!!_p._$$MetaEvent) return;
    /**
     * 事件元对象
     * 
     * [code]
     * 
     * [/code]
     * 
     * @class   {nej.ut._$$MetaEvent}
     * @extends {nej.ut._$$Event}
     * 
     * 
     * 
     */
    _p._$$MetaEvent = NEJ.C();
      _proMetaEvent = _p._$$MetaEvent._$extend(_p._$$Event);
    /**
     * 控件初始化
     * @return {Void}
     */
    _proMetaEvent.__init = function(){
        this.__supInit();
        this.__attrs = [];
    };
    /**
     * 控件重置
     * @param  {Object} 可选配置参数
     * @return {Void}
     */
    _proMetaEvent.__reset = (function(){
        var _doCopy = function(_value,_key){
            this.__attrs.push(_key);
        };
        return function(_options){
            this.__supReset(_options);
            NEJ.X(this,_options,_doCopy._$bind(this));
        };
    })();
    /**
     * 控件销毁
     * @return {Void}
     */
    _proMetaEvent.__destroy = (function(){
        var _doDelete = function(_key,_index,_list){
            delete this[_key];
            _list.splice(_index,1);
        };
        return function(){
            this.__supDestroy();
            _u._$reverseEach(this
              .__attrs,_doDelete,this);
            delete this.value;
            delete this.stopped;
        };
    })();
    /**
     * 设置值
     * @param  {String}   键
     * @param  {Variable} 值
     * @return {Void}
     */
    _proMetaEvent._$set = function(_key,_value){
        this[_key] = _value;
        this.__attrs.push(_key);
    };
    /**
     * 取值
     * @param  {String}   键
     * @return {Variable} 值
     */
    _proMetaEvent._$get = function(_key){
        return this[_key];
    };
    /**
     * 阻止事件
     * @return {Void}
     */
    _proMetaEvent._$stop = function(){
        this._$set('stopped',!0);
    };
    
};
define('{lib}util/event/meta.js',
      ['{lib}util/event.js'],f);