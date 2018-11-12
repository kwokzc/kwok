/**
 * 后台业务 基金网格
 */


// 观察注释是否有用，无用则删除
// document.getElementByIdx_x=function(id){ 
// if(typeof id =='string') 
// return document.getElementById(id); 
// else 
// throw new error('please pass a string as a id!') 
// } 
var fund = {
	add:function(){
		// 获取基金信息
		var fund_code = $('input[name="fund_add_code"]').val();
		var fund_name = $('input[name="fund_add_name"]').val();
		var fund_gsdq = $('input[name="fund_add_gsdq"]').val();
		var fund_api  = $('input[name="fund_add_api"]').val();

		if(!fund_code){
			dialog.msg('基金代码不能为空！');
			return;
		}
		if(!fund_name){
			dialog.msg('基金名称不能为空！');
			return;
		}
		if(!fund_gsdq){
			dialog.msg('基金地区不能为空！');
			return;
		}
		if(!fund_api){
			dialog.msg('基金接口不能为空！');
			return;
		}

		// 执行异步请求	$.post
		var url = '/index/index/fund_add';
		var data = {'fund_code':fund_code,'fund_name':fund_name,'fund_gsdq':fund_gsdq,'fund_api':fund_api};
		$.post(url,data,function(result){
			 if(result.status == 0){
			 	return dialog.error(result.message);
			 }
			 if(result.status == 1){
			 	return dialog.msg('添加成功！');
			 	// return dialog.msg_url(result.message,'/public/admin/index/index')
			 }
		},'JSON');

	},
	buy:function(){
		// 获取购买信息
		var fund_id    = $('select[name="fund_id"]').val();
		var buy_dj     = $('input[name="fund_buy_dj"]').val();
		var buy_sl     = $('input[name="fund_buy_sl"]').val();
		// var buy_je     = $('input[name="fund_buy_je"]').val();
		// var buy_je     = buy_dj*buy_sl;
		var buy_time   = $('input[name="fund_buy_time"]').val();
		var grid_fudu  = $('input[name="fund_buy_fd"]').val();
		var buy_sxf    = $('input[name="fund_buy_sxf"]').val();

		if(!fund_id){
			dialog.msg('请选择正确的基金！');
			return;
		}
		if(!buy_dj){
			dialog.msg('单价不能为空！');
			return;
		}
		if(!buy_sl){
			dialog.msg('数量不能为空！');
			return;
		}
		// if(!buy_je){
		// 	dialog.msg('金额不能为空！');
		// 	return;
		// }
		if(!buy_time){
			dialog.msg('时间不能为空！');
			return;
		}
		if(!buy_sxf){
			dialog.msg('手续费不能为空！');
			return;
		}


		// 执行异步请求	$.post
		var url = '/index/index/fund_buy';
		var data = {'fund_id':fund_id,'buy_dj':buy_dj,'buy_sl':buy_sl,'buy_time':buy_time,'buy_sxf':buy_sxf,'grid_fudu':grid_fudu};
		$.post(url,data,function(result){
			 if(result.status == 0){
			 	return dialog.error(result.message);
			 }
			 if(result.status == 1){
			 	return dialog.msg('添加成功！');
			 	// return dialog.msg_url(result.message,'/public/admin/index/index')
			 }
		},'JSON');
	},
	sell:function(){
		// 获取卖出信息
		var buy_id    = $('select[name="buy_id"]').val();
		var sell_mcdj     = $('input[name="fund_sell_dj"]').val();
		var sell_mcsl     = $('input[name="fund_sell_sl"]').val();
		// var sell_je     = $('input[name="fund_buy_je"]').val();
		// var sell_je     = buy_dj*buy_sl;
		var sell_time   = $('input[name="fund_sell_time"]').val();
		// var grid_fudu  = $('input[name="fund_buy_fd"]').val();
		var sell_sxf    = $('input[name="fund_sell_sxf"]').val();

		if(!buy_id){
			dialog.msg('请选择正确的对应买入ID！');
			return;
		}
		if(!sell_mcdj){
			dialog.msg('单价不能为空！');
			return;
		}
		if(!sell_mcsl){
			dialog.msg('数量不能为空！');
			return;
		}
		// if(!buy_je){
		// 	dialog.msg('金额不能为空！');
		// 	return;
		// }
		if(!sell_time){
			dialog.msg('时间不能为空！');
			return;
		}
		if(!sell_sxf){
			dialog.msg('手续费不能为空！');
			return;
		}


		// 执行异步请求	$.post
		var url = '/index/index/fund_sell';
		var data = {'buy_id':buy_id,'sell_mcdj':sell_mcdj,'sell_mcsl':sell_mcsl,'sell_time':sell_time,'sell_sxf':sell_sxf};
		$.post(url,data,function(result){
			 if(result.status == 0){
			 	return dialog.error(result.message);
			 }
			 if(result.status == 1){
			 	return dialog.msg('添加成功！');
			 	// return dialog.msg_url(result.message,'/public/admin/index/index')
			 }
		},'JSON');
	},
	logout:function(){
		var username = document.getElementById("username").innerText;
		var url = '/public/admin/login/login_logout';
		var data = {'username':username};
		$.post(url,data,function(result){
			if (result.status == 1) {
				return dialog.msg_url(result.message,'/public/admin/login/index')
			}
		},'JSON');
	}
}