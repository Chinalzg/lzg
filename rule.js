		function checkName(){

			var name=document.getElementById('name').value;
			// alert(name)
			var nameInfo=document.getElementById('nameInfo');

			var uPattern = /^[a-zA-Z0-9_-]{4,16}$/;

			if(name=='' || name.length<1){
				nameInfo.innerHTML="<font color='red'>名称不能为空</font>";
				return false;
			}else if(!uPattern.test(name)){
				nameInfo.innerHTML="<font color='red'>4到16位（字母，数字，下划线，减号）组成</font>";
				return false;
			}else{
				nameInfo.innerHTML="<font color='green'>√</font>";
				return true;
			}
		}

		//检查密码
		function checkPassword(){
			var password=document.getElementById('password').value;
			// alert(password)
			var passwordInfo=document.getElementById('passwordInfo');

			var pPattern = /^(\d+|[a-z]+|[A-Z]+|[!@#$%^&*]+)$/;

			//密码不可为空
			if(password=='' || password.length<1){
				passwordInfo.innerHTML="<font color='red'>密码不能为空</font>";
				return false;
			}else if(pPattern.test(password)){
				
				passwordInfo.innerHTML="<font color='red'>纯数字或纯英文密码强度较弱</font>";
				return false;
			}else{
				passwordInfo.innerHTML="<font color='green'>√</font>";
				return true;
			}
		}

		//确认密码  密码正则必须激活
		function checkSurePassword(){
			var password=document.getElementById('password').value;
			var surePassword=document.getElementById('surePassword').value;
			// alert(password)
			var surePasswordInfo=document.getElementById('surePasswordInfo');

			if(password!==surePassword){
				surePasswordInfo.innerHTML="<font color='red'>两次密码不一致</font>";
				return false;
			}else{
				surePasswordInfo.innerHTML="<font color='green'>√</font>";
				return true;
			}
		}

		//整数
		function checkInteg(){
			var integ=document.getElementById('integ').value;

			var integInfo=document.getElementById('integInfo');
			var IntegPattern = /^-?\d+$/;

			if(!IntegPattern.test(integ)){
				integInfo.innerHTML="<font color='red'>请输入整数</font>";
				return false;
			}else{
				integInfo.innerHTML="<font color='green'>√</font>";
				return true;
			}
		}

		//邮箱
		function checkEmail(){
			var email=document.getElementById('email').value;

			var emailInfo=document.getElementById('emailInfo');
			var emailPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

			if(!emailPattern.test(email)){
				emailInfo.innerHTML="<font color='red'>邮箱格式不合法</font>";
				return false;
			}else{
				emailInfo.innerHTML="<font color='green'>√</font>";
				return true;
			}
		}

		function checkTel(){
			var telPattern = /^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/;
			var tel=document.getElementById('tel').value;

			var telInfo=document.getElementById('telInfo');
			

			if(!telPattern.test(tel)){
				telInfo.innerHTML="<font color='red'>手机格式不合法</font>";
				return false;
			}else{
				telInfo.innerHTML="<font color='green'>√</font>";
				return true;
			}
		}

		function checkIdCard(){
			var idCardPattern = /^[1-9]\d{5}(18|19|([23]\d))\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$/;
			var idCard=document.getElementById('idCard').value;

			var idCardInfo=document.getElementById('idCardInfo');
			

			if(!idCardPattern.test(idCard)){
				idCardInfo.innerHTML="<font color='red'>身份证格式不合法</font>";
				return false;
			}else{
				idCardInfo.innerHTML="<font color='green'>√</font>";
				return true;
			}
		}

		function checkChinese(){
			var chinesePattern = /[\u4E00-\u9FA5]/;
			var chinese=document.getElementById('chinese').value;

			var chineseInfo=document.getElementById('chineseInfo');
			

			if(!chinesePattern.test(chinese)){
				chineseInfo.innerHTML="<font color='red'>只能是中文格式</font>";
				return false;
			}else{
				chineseInfo.innerHTML="<font color='green'>√</font>";
				return true;
			}
		}