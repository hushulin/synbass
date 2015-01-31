var f = function(){
    //定义测试模块
    module("ui-card");
    
    var _  = NEJ.P,
        _e = _('nej.e'),
        _p = _('nej.ui');
        
    //开始单元测试
    test('card',function(){
        stop();
        var _card = _p._$$Card._$allocate({
            parent:'card-box',
            top:10,
            left:10,
            destroyable:true,
            content:'<div>您要显示的内容HTML或节点</div>',
            oncontentready:function(_html){
                ok(true,'设置卡片内容成功');
            },
            onbeforerecycle:function(){
                ok(true,'destroyable属性决定回收前是否触发');
                start();
            }
        });
//        _card._$show();
    });
}
module('依赖模块');
test('define',function(){
    define('{pro}uiCardTest.js',['{lib}ui/layer/card.js','{pro}log.js'],f);
});