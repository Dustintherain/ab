
<!DOCTYPE html>
  <html>
            <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>用户登录 - {{ config('sys.web.name','二级域名分发') }}</title>
    <meta name="keywords" content="content="{{ config('sys.web.keywords') }}"/>
    <meta name="description" content="{{ config('sys.web.description') }}"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" rel="stylesheet">
</head>
<body>
<style>
    * {
      /* 清除内，外边距 */
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      font-size: 12px;
    }

    body {
      background: linear-gradient(120deg, #f88084 0%, #D6DCE9 100%) no-repeat;
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .box {
      width: 90rem;
      height: 70rem;
      border-radius: 1.5rem;
      background-color: rgba(255, 255, 255, 0.5);
      margin: 10% auto;
      box-shadow: 0 0 1rem 0.2rem rgba(0, 0, 0, 0.1);
      display: flex;
    }

    .box .left {
      width: 35%;
      height: 100%;
      background-color: #83C0E1;
      border-radius: 1.5rem 0 0 1.5rem;
      background-image: url(https://www.lkdns.top/api/api.php);
      /* 有点超出 */
      background-size: cover;
      opacity: .85;
    }

    .box .right {
      flex: 1;
      height: 100%;
      display: flex;
      align-items: center;
      flex-direction: column;
      border-radius: 0 1.5rem 1.5rem 0;

    }

    .box .right h4 {
      margin-top: 5rem;
      font-size: 3rem;
      text-align: center;
      color: #f88084;
    }

    form {
      display: flex;
      flex-direction: column;
      width: 100%;
      align-items: center;

    }
    .box .right form .input {
      outline: none;
      width: 80%;
      height: 5rem;

      font-size: 1.6rem;
      padding: 1rem 0 0 1.2rem;
      border: none;
      border-bottom: 1px solid #f88084;
      background: transparent;
      margin-top: 5rem;
    }

    .box .right form .button {
      width: 60%;
      height: 5rem;
      font-weight: 600;
      font-size: 1.6rem;
      background-image: linear-gradient(120deg, #f88084 0%, #D6DCE9 100%);
      border: none;
      margin-top: 6rem;
      border-radius: 0.5rem;
      transition: all .3s;
      color: aliceblue;
    }

    .box .right form .button:hover {
      /* 加个阴影 */
      box-shadow: 0 0 2rem 0.5rem rgba(0, 0, 0, 0.25);
    }

    .box .right .more {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: space-between;
      padding: 0 100px;
      margin-top: 1rem;
    }

    .box .right .more a {
      margin-top: 4.5rem;
      font-size: 1.5rem;
      color: #666;
      text-decoration: none;
    }

    ::selection {
      color: #fff;
      background-color: #f88084;
    }
  </style>
</head>

<body>
  <div class="box">
    <div class="left">
      <!-- 图片部分 -->
    </div>
    <div class="right">
        
  <main class="bd-masthead" id="content">
    
        <div class="row" v-if="act==='reg'">
    
                
                    <h4>注册</h4>
                    
                        <form id="form-reg">
                            <div class="form-group row">
                                
                                <div class="">
                                    <input 用户名type="text" name="username" class="input" placeholder="输入用户名">
                                </div>
                            </div>
                            <div class="form-group row">
                            
                                <div class="">
                                    <input type="password" name="password" class="input" placeholder="设置登录密码">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="">
                                    
                                    <input type="text" name="email" class="input" placeholder="输入你的邮箱地址">
                                    <h5>禁止🚫使用临时邮箱</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="">
                                    <input type="text" name="code" class="input" placeholder="输入验证码">
                                    <img title="点击刷新" src="/captcha"
                                         style="float: left;width: 150px; margin: 5px auto"
                                         onclick="this.src='/captcha?_='+Math.random();" id="code">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                
                                <a class="button"  disabled="disabled" @click="reg"> 注 册 </a>
                            </div>
             
                            <div class="form-group text-center">
                                <p><svg t="1693268754161" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3609" width="20" height="20"><path d="M514 912c-219.9 0-398.8-178.9-398.8-398.9 0-219.9 178.9-398.8 398.8-398.8s398.8 178.9 398.8 398.8c0 220-178.9 398.9-398.8 398.9z m0-701.5c-166.9 0-302.7 135.8-302.7 302.7S347.1 815.9 514 815.9c166.9 0 302.7-135.8 302.7-302.7S680.9 210.5 514 210.5z" fill="#1296db" p-id="3610"></path><path d="M239.4 486.2l59.7-38.8c57.1-37.1 134.1-20.7 169.7 37.3 25.8 41.9 36.4 83.5 36.4 83.5s137.1-308.8 327.7-366.7c0 0-59.5 135.9 27.3 234 0 0-197.8 55.1-344.1 286.2-4.9 7.8-16.3 7.6-20.8-0.4-29.1-50.5-120.7-192.4-255.9-235.1z" fill="#1296db" p-id="3611"></path></svg><a  href="https://docs.qq.com/doc/DZHJrbW5BWUFNb1Nw">使用协议</a></p>
                                <p>已有账号？<a @click="act='login'" href="#">马上登录</a></p>
                            </div>
                        </form>
                    
                
            </div>
        
        <div class="row" v-else>
            
                
                    <h4>登录</h4>
                    
                        <form id="form-login">
                            .<div class="form-group row">
                                <div class="#">
                                    <input type="text" name="username" class="input" placeholder="输入用户名">
                                </div>
                            </div>
                            <div class="form-group row">
                                
                                <div class="#">
                                    <input type="password" name="password" class="input" placeholder="输入用户密码">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-3 col-form-label"></label>
        
                                <div class="col-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                        <label class="form-check-label" for="remember">记住</label>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <a class="button" @click="login"> 登 录 </a>
                            </div>
                            
                        
                              <div class="more">
        <a @click="act='reg'" href="#">注册账号</a>
        <a class="float-right" href="#modal-password" data-toggle="modal">找回密码</a>
        </div>
                        </form>
                    
                
            
        
    </div>
    <div class="modal fade" id="modal-password">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">找回密码</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-password">
                        <input type="hidden" name="action" value="sendPasswordEmail">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-3 col-form-label">账号</label>
                            <div class="col-9">
                                <input type="text" name="username" class="form-control" placeholder="输入你要找回的账号或者邮箱">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-3 col-form-label">验证码</label>
                            <div class="col-9">
                                <input type="text" name="code" class="form-control" placeholder="输入验证码">
                                <img title="点击刷新" src="/captcha"
                                     style="float: left;width: 150px; margin: 5px auto"
                                     onclick="this.src='/captcha?_='+Math.random();" id="findCode">
                            </div>
                        </div>
                    </form>
                </div>.
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" @click="password">找回密码</button>
                </div>
            </div>
        </div>
    </div>
    </mian>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/layer/2.3/layer.js"></script>
<script src="/js/main.js"></script>
<script>
    new Vue({
        el: '#content',
        data: {
            act: 'login'
        },
        methods: {
            password: function () {
                var vm = this;
                this.$post('/password', $("#form-password").serialize())
                    .then(function (data) {
                        $("#findCode").click();
                        if (data.status === 0) {
                            layer.alert(data.message);
                        } else {
                            layer.alert(data.message);
                        }
                    });
            },
            login: function () {
                var vm = this;
                this.$post('/login', $("#form-login").serialize())
                    .then(function (data) {
                        if (data.status === 0) {
                            location.href = data.go ? data.go : "/";
                        } else {
                            layer.alert(data.message);
                        }
                    });
            },
            reg: function () {
                var vm = this;
                this.$post('/reg', $("#form-reg").serialize())
                    .then(function (data) {
                        $("#code").click();
                        if (data.status === 0) {
                            layer.alert(data.message, {
                                closeBtn: 0
                            }, function (i) {
                                layer.close(i);
                            });
                        } else {
                            layer.alert(data.message);
                        }
                    });
            }
        },
        mounted: function () {
            if ($_GET('act') === 'reg') {
                this.act = 'reg';
            }
            var vm = this;
            document.onkeyup = function (e) {
                var code = parseInt(e.charCode || e.keyCode);
                if (code === 13) {
                    if (vm.act === 'reg') {
                        vm.reg();
                    } else {
                        vm.login();
                    }
                }
            }
        }
    });
</script>
</html>