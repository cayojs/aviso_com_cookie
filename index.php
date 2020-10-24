<html>
<head>
    <title>Aviso com Cookie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>


<!-- AVISO - START -->
<style>
    #aviso{width:100%;background-color:#333;position:fixed;left:0;bottom:0;z-index:100000;box-shadow:0 0 0 2px #fff;display:none;}
    #aviso div{max-width:1200px;min-height:65px;margin:0 auto;padding:0 10px;display:flex;align-items:center;justify-content:center;}
    #aviso span{color:#fff;font-size:14px;font-family:Arial;}
    #aviso span a{color:#fff;display:inline-block;}
    #aviso span a:hover{color:#4caf50;}
    #aviso b{background-color:#3483fa;color:#fff;padding:7px 12px;border-radius:5px;margin:0 0 0 10px;cursor:pointer;font-size:15px;font-family:Arial;font-weight: normal;-webkit-user-select:none;-ms-user-select:none;user-select:none;}
    #aviso b:hover{background-color:#4caf50;}
    @media(max-width:950px){#aviso div{flex-direction:column;text-align:center;padding:10px;}#aviso b{width:90%;margin:10px 0 0 0;}}
</style>


<div id="aviso">
    <div>
        <span>Ao navegar neste site, você aceita os cookies que usamos para melhorar sua experiência. <a href="./politica-de-privacidade" target="_blank">Mais informações</a></span>
        <b onclick="addCookieAviso()">Entendi</b>
    </div>
</div>

<script>
    function addCookieAviso(){
        var dataAtual = new Date();
        dataAtual.setTime(dataAtual.getTime() + (365 * 24 * 60 * 60 * 1000));
        var dataExpiracao = dataAtual.toUTCString();
        document.cookie = "Aviso=" + true + "; expires=" + dataExpiracao + "; path=/";
        document.getElementById("aviso").style.display = "none";
    }

    function getCookie(name){
        var valor = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
        return valor ? valor[2] : null;
    }

    function checkCookie(){
        var nomeCookie = getCookie("Aviso");
        if(nomeCookie){return true;} else{return false;}
    }

    if(!checkCookie()){
        document.getElementById("aviso").style.display = "block";
    }
</script>
<!-- AVISO - END -->

</body>
</html>