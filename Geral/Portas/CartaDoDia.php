<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>TAROTDOOR -  Carta do Dia</title>
<style type="text/css">
<!--
body {
	background-color: #CC99FF;
}
-->
</style>
<meta name="viewport" content="width=device-width">
<link href="../../old/templates/Portas.css" rel="stylesheet" type="text/css" />
<link href="../../old/templates/LArcanos.css" rel="stylesheet" type="text/css" />
<link href="http://www.tarotdoorplus/templates/main.css" rel="stylesheet" type="text/css" /><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJC46P5');</script>
<!-- End Google Tag Manager -->

</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=156751751061893";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJC46P5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->  <div align="center">
  <table width="100%" border="0" cellpadding="3" cellspacing="3">
    <tr>
      <td bordercolor="#FFFF00" bgcolor="#330066"><div align="center"> <script language="JavaScript" type="text/javascript" src="/Naves/top.js"></script>
</script></div>     </td>
    </tr>
    <tr>
      <td bgcolor="#660099"><div align="center">&nbsp;<span class="PausTitulo">Carta do dia</span></div></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="4" cellpadding="2">
        <tr>
          <td width="14%" rowspan="2" bgcolor="#CC66FF"><p> <div align="center"><script language="JavaScript" src="http://www.tarotdoor.com/Banners/Livro/B_Left1.js" type="text/javascript">
          </script></div></p></td>
          <td width="72%" rowspan="2"><table width="100%" border="1" align="center" cellpadding="4" cellspacing="2">
            <tr>
              <td bgcolor="#660099"><div align="center" class="Title_M_Cream_C">Todo dia uma mensagem nova, volte sempre!<br />
                </div></td>
              </tr>
            <tr>
              <td height="119" valign="top">                   <table width="100%" border="3" cellpadding="3" cellspacing="3" bordercolor="#660099">
                <tr>
                  <td align="center" valign="top" bgcolor="#CC99FF">
                    <p class="Espadastexto">
<?php

$servername = "webserver.tarotdoor.com";
$username = "tarocar5_nelise";
$password = "sxn?XZA+7TlI";
$dbname = "tarocar5_data";

$link = mysqli_connect($servername, $username, $password, $dbname);

mysqli_set_charset($link,"utf8"); 
  
$res = mysqli_query($link, "SELECT * FROM Livreto2 ORDER BY rand(" . date("Ymd") . ") LIMIT 1,1" );

mysqli_set_charset($res,"utf8"); 

while ($row = $res->fetch_assoc()) 
{
	mysqli_set_charset($row,"utf8"); 
echo                      
"
      
<table width=700>
<tr>
<td>
<table>
      <tr>
	  
        <td class=center>
		<img src=".$row ['imagem']." width=110 height=220 border=0  hspace=6 vspace=6 align=middle />
		</td>
		
		 <td>
		<center> <p class=EspadasTitulo>".$row['ID']." 
								".$row['titulo']." </p></center>
		<p class=Espadastexto><i>
								".$row['verso']." </i></p> 
		<p class=Espadastexto>
								".$row['chaves']."</p> 
		

		</td>
		
      </tr>
	  
      <tr>
	<td colspan=2>
		<p class=Espadastexto>".$row['prev_ano']." <br/>
                       ".$row['exemplos']."  
         </p>
        
   </td>
    </tr>

</table> 
	
	 </td>
	 
       <tr>   

	  <td colspan=2>
<span class=EspadasTitulo>No amor: </span> <span class=Espadastexto>".$row['amor']." </span> <br/>
<span class=EspadasTitulo>No trabalho: </span><span class=Espadastexto>".$row['trabalho']." </span> 
 <p class=Espadastexto>Clique na seta para ouvir: 
		 	<embed src=".$row['audio']." width=194 height=60 autostart=False ></embed>
		 </p>
	  </td>
	  
	 </tr>
</table> 

    ";

}

 
?>
                    </p></td>
                  </tr>
                </table>
                <table width="100%" height="57" border="0" cellpadding="4" cellspacing="3">
                  <tr>
                    <td align="center" bgcolor="#FAF2DA"><p><div class="fb-share-button" data-href="http://tarotdoor.com/Geral/Portas/CartaDoDia.php" data-layout="button_count" data-mobile-iframe="true"></div></p></td>
                  </tr>
                </table></tr>
          </table></td>
          <td height="80" bgcolor="#CC66FF"><p><div align="center"><script language="JavaScript" src="https://www.tarotdoor.com/Banners/Livro/CartasAniv.js" type="text/javascript">
          </script></div></p>
   <br />
<br />
 <p><div align="center"><script language="JavaScript" src="http://www.tarotdoor.com/Banners/Livro/Google.js" type="text/javascript">
          </script></div></p></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><p align="center"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- CartaDia -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-7685249412457751"
     data-ad-slot="2949903725"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></p>
<p>&nbsp;</p>

<p><div align="center"><img src="/cgi-sys/Count.cgi?df=cartaDia.dat|display=Counter|ft=2|md=10|frgb=100;139;216|dd=H"> </div></p><p>
        <div align="center"> <script language="JavaScript" type="text/javascript" src="/Naves/Rodape.js"></script>
</div>   </p>     </td>
    </tr>
   
  </table>
  
  
  </div>
<table width="100%" border="0">
  <tr>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>
  <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
</p>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6482643-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>