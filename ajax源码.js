
//引入jquery 文件

document.write("<script  src='jquery.js'></script>");

function ajax(url, type = 'GET', param = {}, callback = function(){}, options= {}){

	var contentType = options.contentType || 'application/x-www-form-urlencoded';

	var processData = options.processType || true;

	var dataType = options.dataType || 'json';

	var async = options.async || true;

	var cache = options.asycn || true;

        $.ajax({

            type:type,

            url:url,

            data:param,

            dataType:dataType,

            contentType: false,  //不允许处理上传的文件

        	processData: false,

            success:callback,

            error:function(e){
            	console.log('暂时没有处理错误请求(作者刘志刚认为一般用不到)，如需处理请联系刚哥(wx:18732069605 qq:961675702 163email:18732069605@163.com)');
            }

        });


}