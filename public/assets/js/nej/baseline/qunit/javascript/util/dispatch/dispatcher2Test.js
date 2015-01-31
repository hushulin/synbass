var f = function(){
    //定义测试模块
    module("dispatcher2");
    
    var _  = NEJ.P,
        _p = _('nej.ut.j'),
        _j = _('nej.j');
    
	test('',function(){
		
	});
}
module('依赖模块');
test('define',function(){
    define('{pro}dispatcher2Test.js',
    ['{lib}util/dispatcher/dispatcher.2.js','','{pro}log.js'],f);
});
  