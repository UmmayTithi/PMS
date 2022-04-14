
<!DOCTYPE html>
<html lang="en">
<head><script nonce="b76378e7-76f4-4a98-82ff-6b0c504484d8">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form by Colorlib</title>

<link rel="stylesheet" href="ttps://colorlib.com/etc/regform/colorlib-regform-8/fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-8/css/style.css">
<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="main">
<section class="signup">

<div class="container">
<div class="signup-content">

<form action="{{route('customer.registration')}}"method="POST">
    @csrf
<h2 class="form-title">Create account</h2>
<div class="form-group">
<input type="text" class="form-input" name="name" id="name" placeholder="Your Name" />
</div>
<div class="form-group">
<input type="email" class="form-input" name="email" id="email" placeholder="Your Email" />
</div>
<div class="form-group">
<input type="text" class="form-input" name="password" id="password" placeholder="Password" />
<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
</div>

<div class="form-group">
<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
</div>
<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
</div>
</form>
<p class="loginhere">
Have already an account ? <a href="{{route('login.form')}}" class="loginhere-link">Login here</a>
</p>
</div>
</div>
</section>
</div>

<script src="https://colorlib.com/etc/regform/colorlib-regform-8/vendor/jquery/jquery.min.js"></script>
<script src="https://colorlib.com/etc/regform/colorlib-regform-8/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f81408c4ff2a3e9","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>