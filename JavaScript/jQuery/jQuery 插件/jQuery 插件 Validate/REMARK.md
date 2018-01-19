$.extend($.validator.messages, {
    required: "这是必填字段",
    remote: "请修正此字段",
    email: "请输入有效的电子邮件地址",
    url: "请输入有效的网址",
    date: "请输入有效的日期",
    dateISO: "请输入有效的日期 (YYYY-MM-DD)",
    number: "请输入有效的数字",
    digits: "只能输入数字",
    creditcard: "请输入有效的信用卡号码",
    equalTo: "你的输入不相同",
    extension: "请输入有效的后缀",
    maxlength: $.validator.format("最多可以输入 {0} 个字符"),
    minlength: $.validator.format("最少要输入 {0} 个字符"),
    rangelength: $.validator.format("请输入长度在 {0} 到 {1} 之间的字符串"),
    range: $.validator.format("请输入范围在 {0} 到 {1} 之间的数值"),
    max: $.validator.format("请输入不大于 {0} 的数值"),
    min: $.validator.format("请输入不小于 {0} 的数值")
});

常用方法及注意问题
1、用其他方式替代默认的 SUBMIT

$().ready(function() {
 $("#signupForm").validate({
        submitHandler:function(form){
            alert("提交事件!");   
            form.submit();
        }    
    });
});
    
使用ajax方式
$(".selector").validate({     
 submitHandler: function(form) 
   {      
      $(form).ajaxSubmit();     
   }  
 }) 
     
可以设置 validate 的默认值，写法如下：
$.validator.setDefaults({
submitHandler: function(form) { alert("提交事件!");form.submit(); }
});

如果想提交表单, 需要使用 form.submit()，而不要使用 $(form).submit()。

2、debug，只验证不提交表单
如果这个参数为true，那么表单不会提交，只进行检查，调试时十分方便。
$().ready(function() {
 $("#signupForm").validate({
        debug:true
    });
});
如果一个页面中有多个表单都想设置成为 debug，则使用：
$.validator.setDefaults({
   debug: true
})

3、ignore：忽略某些元素不验证
ignore: ".ignore"

4、更改错误信息显示的位置
errorPlacement：Callback
指明错误放置的位置，默认情况是：error.appendTo(element.parent());即把错误信息放在验证的元素后面。
errorPlacement: function(error, element) {  
    error.appendTo(element.parent());  
}

5、更改错误信息显示的样式
设置错误提示的样式，可以增加图标显示，在该系统中已经建立了一个 validation.css，专门用于维护校验文件的样式。
input.error { border: 1px solid red; }
label.error {
  background:url("./demo/images/unchecked.gif") no-repeat 0px 0px;

  padding-left: 16px;

  padding-bottom: 2px;

  font-weight: bold;

  color: #EA5200;
}
label.checked {
  background:url("./demo/images/checked.gif") no-repeat 0px 0px;
}


6、每个字段验证通过执行函数
success：String,Callback
要验证的元素通过验证后的动作，如果跟一个字符串，会当作一个 css 类，也可跟一个函数。
success: function(label) {
    // set &nbsp; as text for IE
    label.html("&nbsp;").addClass("checked");
    //label.addClass("valid").text("Ok!")
}
添加 "valid" 到验证元素，在 CSS 中定义的样式 <style>label.valid {}</style>。
success: "valid"