$(function () {
    // 注册验证
    $('#registerform')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                // 验证用户名
                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 12,
                            message: '用户名长度在6~12位'
                        },
                    }
                },
                // 验证密码
                password: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '密码长度在6~18位'
                        },
                    }
                },
                // 确认密码
                checkpwd: {
                    validators: {
                        notEmpty: {
                            message: '确认密码不能为空'
                        },
                        identical: {
                            field: 'password',
                            message: '两次密码输入不一致'
                        },
                    }
                },
                // 验证手机号
                mobile: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: '手机号不能为空'
                        },
                        regexp: {
                            regexp: /^[1][3,4,5,7,8][0-9]{9}$/,
                            message: '请输入正确的手机号'
                        },

                    }
                },
                // 验证邮箱
                email: {
                    validators: {
                        notEmpty: {
                            message: '邮箱不能为空'
                        },
                        emailAddress: {
                            message: '请输入正确的邮箱地址'
                        }
                    }
                },

            }
        })
        .on('success.form.bv', function (e) {
            // 阻止表单的默认提交行为
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            // 获取用户输入的信息
            const data = $form.serialize();
            // 发送的地址
            const regurl = "./api/useradd.php";
            // 发送ajax
            $.post(regurl, data, function (result) {
                console.log(result);
                // 根据后端返回的数据做出相应的业务逻辑 
                if (result.isSuccess) {
                    alert(result.msg);
                    location.href = "./login.php";
                } else {
                    alert(result.msg);
                }
            }, 'json');
        });

    // 登录验证
    $('#loginform')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                // 验证用户名
                username: {
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 12,
                            message: '用户名长度在6~12位'
                        },
                    }
                },
                // 验证密码
                password: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '密码长度在6~18位'
                        },
                    }
                },
            }
        })
        .on('success.form.bv', function (e) {
            // 阻止表单的默认提交行为
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            // 获取用户输入的信息
            const data = $form.serialize();
            // 发送的地址
            const regurl = "./api/usercheck.php";
            // 发送ajax
            $.post(regurl, data, function (result) {
                // console.log(result);
                // 根据后端返回的数据做出相应的业务逻辑 
                if (result.isSuccess) {
                    $("#ShowModal").modal('show');
                    $("#ShowTitle").text("登录成功");
                    $("#ShowContent").html(`<span class='glyphicon glyphicon-ok bg-success'></span>${result.msg},等待<span id="num"></span>秒后自动跳转到个人中心`);
                    // 定时器修改的数字
                    let num=3;
                    var times=setInterval(()=>{
                        num--;
                        $("#num").text(num);
                        if(num==0){
                            // 清除定时器
                            clearInterval(times);
                            // 跳转到个人中心
                            location.href="./personal.php";
                        }
                    },1000);
                } else {
                    $("#ShowModal").modal('show');
                    $("#ShowTitle").text("登录失败");
                    $("#ShowContent").html("<span class='glyphicon glyphicon-remove bg-danger'></span>"+result.msg);
                }
            }, 'json');
        });
});