/*jq文件用来表单交互*/
/*注意：由于本实现方式，用到了p元素的动态添加，和对p元素内容进行清空的$("").replaceAll("#password_2~p")语句，所以要考虑到p元素会在进行操作后的已经被添加到文件中，只是没有显示而已*/
$(function() {
	$("#username").trigger("focus"); //默认时文本框获取焦点
	$("#username").blur(function() { //用户名文本框失去焦点事件
		var vtxt = $("#username").val(); //获取此时文本框内的值
		var pUsername = $("#username~p").length; //获取此时p元素是否已经存在           
		if (vtxt.length == 0 && pUsername == 0) {
			$("<p>请输入用户名</p>").insertAfter("#username"); //将提示元素插入到文本框之后，该p元素已经在css中设有样式
		} else {
			if (vtxt.length != 0) {
				/*$("#username~p").hide();*/
				$("").replaceAll("#username~p");
			}
		}

	});
	$("#password_1").blur(function() { //设置密码文本框失去焦点事件
		var passwordValue_1 = $("#password_1").val(); //获取此时文本框内的值
		var pPassword_1 = $("#password_1~p").length;

		if (passwordValue_1.length == 0 && pPassword_1 == 0) {
			$("<p>请输入密码</p>").insertAfter("#password_1"); //将提示元素插入到文本框之后，该p元素已经在css中设有样式
		} else {
			if (passwordValue_1.length != 0) {
				/*$("#password_1~p").hide();*/
				$("").replaceAll("#password_1~p");
			}
		}
		var passwordValue_2 = $("#password_2").val();
		if (passwordValue_2 == passwordValue_1 && passwordValue_1.length != 0) { //解决不修改确认密码，修改设置密码时，密码一致提示不能立即出现
			$("").replaceAll("#password_2~img");
			$("<img src=../images/right.png  />").insertAfter("#password_2");
		}

	});
	$("#password_2").blur(function() { //确认密码文本框失去焦点事件
		var passwordValue_2 = $("#password_2").val(); //获取此时文本框内的值
		var pPassword_2 = $("#password_2~p").length;
		var passwordValue_1 = $("#password_1").val(); //获取输出密码框的值
		if (passwordValue_2.length == 0 && pPassword_2 == 0) {
			$("<p>请输入确认密码</p>").insertAfter("#password_2");
		} else {
			if (passwordValue_2.length != 0) {
				/*$("#password_1~p").hide();*/
				if (passwordValue_2 != passwordValue_1) {
					$("").replaceAll("#password_2~p"); //如果本身已经有动态p元素的话，就赋予起空白，从而不会影响到后续新的p元素插入
					$("<p>2次确认密码不一致</p>").insertAfter("#password_2");
				} else {
					if (passwordValue_2 == passwordValue_1) {
						$("").replaceAll("#password_2~img");
						$("").replaceAll("#password_2~p"); //如果原有添加的动态p标签则去除
						$("<img src=../images/right.png  />").insertAfter("#password_2");
					}
				}
			}
		}
	});
	$("#telephone").blur(function() { //手机文本框失去焦点事件
		var telephoneValue = $("#telephone").val();
		var pTelephone = $("#telephone~p").length;
		if (telephoneValue.length == 0 && pTelephone == 0) { //实现当将已有的手机号清空后会正确显示<p>请输入13位手机号</p>
			$("").replaceAll("#telephone~p");
			$("<p>请输入13位手机号</p>").insertAfter("#telephone");
		} else {
			if (isNaN(telephoneValue)) { //判断是否是数字，含有字符则输入true！！！
				$("").replaceAll("#telephone~p"); //如果本身已经有动态p元素的话，就赋予起空白，从而不会影响到后续新的p元素插入
				$("<p>确保输入的手机号是13位数字</p>").insertAfter("#telephone");
			} else {
				if (telephoneValue.length != 11 && telephoneValue.length != 0) { //判断是否是11位 不等于0的时候是为了确保当没有输入时正确显示前面的“<p>请输入13位手机号</p>”标签
					$("").replaceAll("#telephone~p"); //如果本身已经有动态p元素的话，就赋予起空白，从而不会影响到后续新的p元素插入
					$("<p>您的手机号竟然不是11位！！</p>").insertAfter("#telephone");
				} else {
					if (telephoneValue.length == 11) {
						$("").replaceAll("#telephone~p");

					}
				}
			}
		}
	})
	$("#email").blur(function() { //邮箱文本框失去焦点事件
		var emailValue = $("#email").val();
		var emailStr_1 = emailValue.substr(-4, 4); //判断最后4位是否是.com
		var emailStr_2 = emailValue.indexOf("@"); //判断字符串中是否有@
		var pEmail = $("#email~p").length;
		if (emailStr_2 == -1 || emailStr_1 != ".com") {
			if (pEmail == 0) { //p判断是否已经存在了警示句，有的话就不用显示了
				$("<p>您的邮箱地址不正确</P>").insertAfter("#email")
			}

		} else {
			$("").replaceAll("#email~p");
		}
	})
	$("button[type='submit']").click(function() {
		/*	var pLength_1 = $("p").length;
		if (pLength_1 == 1) {
			return true;
		} else {
			alert("填写有错误，请重新填写");
            return false;
		}*/
		$("input").each(function(index) {
			if ($(this).val().length == 0) {//遍历input元素，如果有空的就弹出警告框
				alert("填写有错误，请重新填写");
				return false;
				$("form").submit(function() {//网上查到的阻止表单提交 看不出来能不能有效
					return false;
				});

			}
		})

	})



})