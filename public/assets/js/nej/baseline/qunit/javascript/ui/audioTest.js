var f = function(){
    //定义测试模块
    module("audio");
    //开始单元测试
    test('audio',function(){
        var _audio = nej.ui._$$AudioPlayer._$allocate({
            parent:document.getElementById('id-box'),
            title:'Track01',
            url:'http://127.0.0.1:8000/nej-baseline/res/test.mp3',
			onstatechange:function(_event){
			}
        });
//        _audio._$play();
//        _audio._$pause();
//        _audio._$stop();
//        _audio._$play();
    });
}
module('依赖模块');
test('define',function(){
    define('{pro}audioTest.js',['{lib}ui/audio/audio.js','{pro}log.js'],f);
});