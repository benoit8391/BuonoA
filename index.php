<!DOCTYPE html>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>富歐納義大利食材網</title>
	<meta name="description" content="富歐納承習義大利人用心製作美食的堅持, 以天然健康的食材,自然原味百分百來自義大利, 從特色麵條、醬汁,義大利黑醋,一級初搾橄欖油及各區域的美酒佳釀我們都會為你提供,以精選優質	的產品和熱誠服務精神, 竭誠為喜愛美食的你和餐飲美食客户提供服務">
	<meta name="keywords" content="富歐納 義大利 義大利美食 pasta 天然食材 義大利麵 義大利黑醋 敢攔油 ">
	<meta name="viewport" content="width=device-width">
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ben.css" rel="stylesheet" type="text/css">
 	<link href="animate.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <style>
body,html{
	overflow-x: hidden;
}
#{ -moz- transition:all 0.4s;
	-ms- transition:all 0.4s;
	-o-  transition:all 0.4s;
	-webkit- transition: all 0.4s;    
	
}
.ben-nav-btn > li > a{
	background:#FFF !important;
	color:#F00 !important;
	border-radius: 5px;
	border: solid 1px #000000;
	padding: 0.2em 0.5em;
	margin:  0em 0.2em; 
	
 }
.ben-nav-btn > li > ul > li > a{
	color: #00F !important;
	
	padding:0.2em 0.5em;
	margin: 0em 0.5em;
	
 } 
 
.ben-nav-btn > li > a:hover{
	background: #FF0 !important;
	color: #00F !important;
 }  
  
.ben-nav-btn-form > button{
	background:#FFF !important;
	color:#F00 !important;
	border-radius: 5px;
	border: solid 1px #000000;
	padding: 0.2em 0.5em;
 }  
.ben-nav-btn-form > button:hover{
	background: #FF0 !important;
	color: #00F !important;
 }   
.ben-about-sd{
	text-shadow: 2px 2px 2px #FFFFFF, -2px -2px 4px #FFFFFF;
}
.div_align{
  display: -webkit-flex;
  display:         flex;
  -webkit-align-items: center;
          align-items: center;
  -webkit-justify-content: center;
          justify-content: center;
}
 
 </style>
  </head>
  <body>
<!--導航_begin_1: 按鈕/P01=#about, #contact -->
<!--導航_begin_2: 按鈕/P02=#news,#bestseller/銷售排行榜,#promotion"/最新促銷 -->
<!--導航_begin_3: 按鈕/P03=#product/產品類別,#pdt-pasta/義大利麵條,#pdt-aceto/義大利黑醋,#pdt-oil/義大利橄欖油,#pdt-sauce/醬料調味品 -->
<!--導航_begin_4: 按鈕/P0?=#cart/購物車 -->
<!--導航_begin_5: 按鈕/P04=#register/登入註冊,#member-entry/會員登入,#member-register/會員註冊,#member-passward/忘記密碼 -->
<!--導航_begin_6: 按鈕/search/搜索 -->

	<nav class="navbar navbar-default ben-nav"  style=" background:#0C0">
	<div class="container-fluid ben-nav-top">
		<div class="row ">
  <!--Nav Logo -->
			<div class="col-xs-2 col-sm-2">
            <img class="img-responsive ben-nav-logo ben-logo-align" src="images/Logo-01.png" style="min-height:55px; width:auto;">
        	</div>
  <!--Nav Button -->
        <div class="col-xs-10 col-sm-10">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      		</button>
  <!--Nav Button 1,2,3,4,5,6-->
      <div class="collapse navbar-collapse ben-btn-align" id="bs-example-navbar-collapse-1">
  		<ul class="nav navbar-nav ben-nav-btn">
      		<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">關於我們<span class="caret"></span></a>
          		<ul class="dropdown-menu">
           			<li><a href="#about">關於富歐納</a></li>
            		<li><a href="#contact">聯絡我們</a></li>
          		</ul>
        	</li>
        	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">最新消息<span class="caret"></span></a>
          		<ul class="dropdown-menu">
            		<li><a href="#bestseller">銷售排行榜</a></li>
            		<li><a href="#promotion">最新促銷</a></li>
          		</ul>
        	</li>
        	<li class="dropdown">
          <a href="#product" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">產品類別<span class="caret"></span></a>
         		 <ul class="dropdown-menu">
            		<li><a href="#pdt-pasta">義大利麵條</a></li>
            		<li><a href="#pdt-aceto">義大利黑醋</a></li>
            		<li><a href="#pdt-oil">義大利橄欖油</a></li>
            		<li><a href="#pdt-sauce">醬料調味品</a></li>
          		</ul>
        	</li>
            <li ><a href="#cart">購物車</a> </li>
            <li class="dropdown ">
              <a href="#register" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">登入註冊 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#member-entry">會員登入</a></li>
                <li><a href="#member">會員註冊</a></li>
                <li><a href="#member-passward">忘記密碼</a></li>
              </ul>
            </li>
          </ul>
          
		<form class="navbar-form navbar-right visible-md visible-lg ben-nav-btn-form" style="margin-top:-0.5em;">
    		<div class="form-group">
     	 		<input type="text" class="form-control ben-search" placeholder="Search">
      		</div>
   	 			<button type="submit" class="btn btn-default">搜索</button>
  		</form>
			</div>  
		</div>
	</div>  
  <!--Nav-Page End-->
  </div>
</nav>
<!--Nav_End-->
<!--導航_end-->
<!--P01: id="about" 圖片輪撥開始-->
   
<div id="about" class="container-fluid">

    <div class="row">
     
		<div class="col-xs-12">
		  
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2500">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      	<li data-target="#carousel-example-generic" data-slide-to="4"></li> 
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/Italy food_01.jpg" class="center-block" alt="...">
          <div class="carousel-caption">
          義大利美食01
          </div>
        </div>  
      	<div class="item">
          <img src="images/Italy food_02.jpg" class="center-block" alt="...">
          <div class="carousel-caption">
          義大利美食02
          </div>
        </div>
         <div class="item">
          <img src="images/Italy food_03.jpg" class="center-block" alt="...">
          <div class="carousel-caption">
          義大利美食03
         </div> 
        </div> 
        <div class="item">
          <img src="images/Italy food_04.jpg" class="center-block" alt="...">
          <div class="carousel-caption">
          義大利美食04
          </div>
        </div>
       <div class="item">
          <img src="images/Italy food_05.jpg" class="center-block" alt="...">
          <div class="carousel-caption">
          義大利美食05
          </div>
        </div> 
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>       
    	
		</div>
        <!--圖片輪播結束-->   
	</div> 
    <!--Home: Beginning of 關於富歐納-->
    <div id="about" class="row ben-about-bg ben-about-p" style=" margin-top:2em; margin-left:0.3em; margin-right:0.3em; padding: 0em 0.5em; ">
        <div class="col-xs-11 col-sm-8 col-md-6 col-lg-5">
        <h1 class="ben-about-text01" style="ben-about-sd;" >關於富歐納
        </h1>
	    <p class="ben-about-text02 text-justify ben-about-sd">
        富歐納承習義大利人用心製作美食的堅持, 以天然健康的食材,自然原味百分百來自義大利, 從特色麵條、醬汁,義大利黑醋,一級初搾橄欖油及各區域的美酒佳釀我們都會為你提供,以精選優質	的產品和熱誠服務精神, 竭誠為喜愛美食的你和餐飲美食客户提供服務
        
        </p>
    	</div>
    
    </div>
    <!--Home: End of 關於赴歐納-->
</div>
<!--P01_Home_End-->
<!--P02: id=#news,#bestseller/銷售排行榜,#promotion"/最新促銷 -->
<!--P02: id="news" -Main_Beginning-->
<div class="container-fluid" style="padding-right:4.5em;">
    <div class="row" style="padding-top:2em;" >
    	<div id="news" class="col-xs-12 col-sm-6 col-md-4" >
    		<div  class=" div_align ben-main-bg01" style="background:#33FF99;">
               <ul >
                <h2 style="padding-bottom:0.5em; padding-left:1em; margin-top: 0em;" >最新消息</h2>
                <li class="lead">慶祝周年,全面 85折</li>
                <li class="lead">購物滿1000, 免運費</li>
                <li class="lead">最新到貨 Macoroni
                通心麵 買一送一</li>
               </ul>
        	</div>        
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-4" >
    		<div class=" div_align ben-main-bg01 " style="background:#FFF; border:2px solid #F00;">
               <ul>
                <h2 style=" padding-bottom:0.5em; padding-left:-1em; margin-top: 0.5em;">產品一覽</h2>
                <li class="lead">義大利麵條</li>
                <li class="lead">義大利黑醋</li>
                <li class="lead">冷壓初榨橄欖油</li>
                <li class="lead">醬料/調味品</li>
               </ul>
        	</div>        
    	</div>
    	<div id="bestseller" class="col-xs-12 col-sm-6 col-md-4" >
    		<div class=" div_align ben-main-bg01" style="background-color:#FF0033">
               <ul>
                <h2 style=" padding-bottom:0.5em; padding-left:0em; margin-top: 0em; color:#FFF">熱銷排行榜</h2>
                <ol class="lead" style="color:#FFF; margin-left:-1em;">
                <li>PD01    立即購買</li>
				<li>PA03	立即購買</li>
				<li>PB04	立即購買</li>
				<li>PC02	立即購買</li>
				<li>PA03	立即購買</li>
                </ol>
               </ul>
        	</div>        
    	</div>
    </div>
</div>
  <!--P02_Main_End-->
<form action="" method="get"> 
<!--P03 Product_Beginning-->
	<div class="container-fluid">
		<div class="row">
			<div class="row" style="background-color:#090; width:auto;">
				<h1 style="color:#FFF; text-align:center;">義大利麵條</h1>
			</div>
		<div class="row">
		<div id="pd_a" class="carousel slide" data-ride="carousel" data-interval="5000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#pd_a" data-slide-to="0" class="active"></li>
        <li data-target="#pd_a" data-slide-to="1"></li>
        <li data-target="#pd_a" data-slide-to="2"></li>
        <li data-target="#pd_a" data-slide-to="3"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <!--PDA01-Page01 beginning-->
			<div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_A01.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
          	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_A02.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA02</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div> 
            
           	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_A03.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA03</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
            <div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_A04.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
 		</div>
        <!--PDA01-Page01 End-->
        <!--PDA01-Page02 beginning-->
        <div class="item">
			<div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_A01.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
          	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_A02.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA02</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div> 
            
           	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_A03.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA03</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
            <div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_A04.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
      	</div>
        <!--PDA01-Page02 End-->
        <!--PDA01-Page03 beginning-->
      	<div class="item">
			<div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_A01.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
          	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_A02.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA02</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div> 
            
           	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_A03.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA03</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
            <div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_A04.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
      	</div>
        <!--PDA01-Page03 End-->
        <!--PDA01-Page04 beginning-->
      	<div class="item">
			<div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_A01.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
          	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_A02.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA02</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div> 
            
           	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_A03.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA03</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
            <div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_A04.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
      	</div>
        <!--PDA01-Page04 End-->
      <a class="left carousel-control" href="#pd_a" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#pd_a" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	</div>
</div> 
</div>
	</div>   
        <!--PDb01-Page01 End-->
	<div class="container-fluid">
		<div class="row">
			<div class="row" style="background-color:#090; width:auto;">
				<h1 style="color:#FFF; text-align:center;">義大利黑醋</h1>
			</div>
		<div class="row">
		<div id="pd_b" class="carousel slide" data-ride="carousel" data-interval="5000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#pd_b" data-slide-to="0" class="active"></li>
        <li data-target="#pd_b" data-slide-to="1"></li>
        <li data-target="#pd_b" data-slide-to="2"></li>
        <li data-target="#pd_b" data-slide-to="3"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <!--PDB01-Page01 beginning-->
			<div class="col-xs-6 col-sm-3" >			  
            	<div><img src="images/img_pdt/PD_B01.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
          	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_B02.jpg" class="img-responsive" > 
			  </div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA02</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div> 
            
           	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_B03.jpg" width="170" height="170" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA03</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
            <div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_B04.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            <div class="clearfix"></div>
 		</div>
        <!--PDB01-Page01 End-->
        <!--PDB01-Page02 beginning-->
        <div class="item">
			<div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_B01.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
          	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_B02.jpg" class="img-responsive" > 
			  </div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA02</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div> 
            
           	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_B03.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA03</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
            <div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_B04.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
             <div class="clearfix"></div>
      	</div>
        <!--PDB01-Page02 End-->
        <!--PDB01-Page03 beginning-->
      	<div class="item">
			<div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_B01.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
          	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_B02.jpg" class="img-responsive" > 
			  </div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA02</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div> 
            
           	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_B03.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA03</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
            <div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_B04.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
             <div class="clearfix"></div>
      	</div>
        <!--PDB01-Page03 End-->
        <!--PDB01-Page04 beginning-->
      	<div class="item">
			<div class="col-xs-6 col-sm-3" >
			  <blockquote>&nbsp;</blockquote>
            	<div><img src="images/img_pdt/PD_B01.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
          	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_B02.jpg" class="img-responsive" > 
			  </div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA02</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div> 
            
           	<div class="col-xs-6 col-sm-3">
            	<div><img src="images/img_pdt/PD_B03.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA03</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
            
            <div class="col-xs-6 col-sm-3" >
            	<div><img src="images/img_pdt/PD_B04.jpg" class="img-responsive" > 
				</div>
            	<div>
                <div class="col-xs-4">品名:</div>	<div class="col-xs-8">PDA01</div>
                <div class="col-xs-4">單價:</div>    <div class="col-xs-8">NTD:150</div>
                <div class="col-xs-4">數量:</div>
                <div class="col-xs-8"><input type="text" class="form-control" placeholder="Text input"></div>
                <div class="col-xs-12">置入購物車
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                置入購物車</button></div>
        		</div>
        	</div>
      	</div>
        <!--PDB01-Page04 End-->
          
      <!-- Controls -->
      <a class="left carousel-control" href="#pd_b" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#pd_b" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	</div>
</div> 
</div> 
	</div>  
	<!--P03 Product_End-->
    <!--Register Beginning-->
	<div class="container-fluid">
		<div class="row ben-register-bg">&nbsp;</div>
    	<div class="row" style="background:#009245; background-image:url(images/register01-08.png); background-repeat:no-repeat; background-position:left bottom; background-size:50%; color:#FFF; ">
        	<div class="row">
            <div class="col-xs-12"><h1 style=" text-align:center;"><a id="member"></a>會員註冊</h1></div>
			</div>
        	<div class="row">
			<div class="col-xs-12 col-sm-5">
            <div class="col-xs-12" style="text-align:center;"><h3>設定會員帳號及密碼</h3></div>
            	<div class="col-xs-4 col-sm-5 ben-register-align-tx">會員帳號: </div>
            	<div class="col-xs-8 col-sm-7 ben-register-align-blk">
            	<input type="text" class="form-control" placeholder="Text input"></div><div class="clearfix"></div> 
            	<div class="col-xs-4 col-sm-5 ben-register-align-tx ">密碼: </div>
            	<div class="col-xs-8 col-sm-7 ben-register-align-blk">
            	<input type="text" class="form-control" placeholder="Text input"></div><div class="clearfix"></div> 
            	<div class="col-xs-4 col-sm-5 ben-register-align-tx">確認密碼: </div>
            	<div class="col-xs-8 col-sm-7 ben-register-align-blk ">
                <input type="text" class="form-control" placeholder="Text input"></div><div class="clearfix"></div> 
			</div>
			<div class="col-xs-12 col-sm-7">
            <div class="col-xs-12" style="text-align:center;"><h3>填寫基本資料</h3></div>
            <div class="col-xs-4 col-sm-3 col-md-2 ben-register-align-tx ">姓氏: </div>
            <div class="col-xs-8 col-sm-9 col-md-10 ben-register-align-blk01">
            <input type="text" class="form-control" placeholder="Text input"></div><div class="clearfix"></div> 
            <div class="col-xs-4 col-sm-3 col-md-2 ben-register-align-tx">名字: </div>
            <div class="col-xs-8 col-sm-9 col-md-10 ben-register-align-blk01 ">
            <input type="text" class="form-control" placeholder="Text input"></div><div class="clearfix"></div> 
            <div class="col-xs-4 col-sm-3 col-md-2 ben-register-align-tx">性別: </div>
            <div class="col-xs-8 col-sm-9 col-md-10 ben-register-align-blk01">
            <select class="form-control"><option>男</option><option>女</option></select></div><div class="clearfix"></div> 
            <div class="col-xs-4 col-sm-3 col-md-2 ben-register-align-tx">手機: </div>
            <div class="col-xs-8 col-sm-9 col-md-10 ben-register-align-blk01">
            <input type="text" class="form-control" placeholder="Text input"></div><div class="clearfix"></div> 
            <div class="col-xs-4 col-sm-3 col-md-2 ben-register-align-tx">E-mail: </div>
            <div class="col-xs-8 col-sm-9 col-md-10 ben-register-align-blk01">
            <input type="text" class="form-control" placeholder="Text input"></div><div class="clearfix"></div> 
            <div class="col-xs-4 col-sm-3 col-md-2 ben-register-align-tx" >地址: </div>
            <div class="col-xs-8 col-sm-9 col-md-10 ben-register-align-blk01">
            	<select class="form-control" style="float:left;">
                  <option>台北市</option>
                  <option>新北市</option>
                  <option>宜蘭縣</option>
                  <option>花蓮縣</option>
                  <option>台東縣</option>
                  <option>桃園縣</option>
                  <option>苗栗縣</option>
                  <option>台中市</option>
                  <option>彰化縣</option>
                  <option>嘉義市</option>
                  <option>台南市</option>
                  <option>高雄市</option>
                  <option>屏東縣</option>
                </select><span class="ben-register-add-font" >縣市</span></div><div class="clearfix"></div>
                	         
			<div class="col-xs-4 col-sm-3 col-md-2 ben-register-align-tx">&nbsp;</div>
			<div class="col-xs-8 col-sm-9 col-md-10 ben-register-align-blk01">
            <input type="text" class="form-control" placeholder="Text input"></div><div class="clearfix"></div> 
			<div class="col-xs-4 col-sm-3 col-md-2 ben-register-align-tx">&nbsp;</div>
			<div class="col-xs-8 col-sm-9 col-md-10 ben-register-align-blk">
            <label><input type="checkbox">同意</label>
            <a href="#aaa">aaa</a><a href="javascript:window.history.back();">關閉</a> <a class="btn btn-primary ben-register-align-tx" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="background:none;">
            <span class="hidden-xs">閱讀</span>個資保護法條文<span class="hidden-xs">說明</span></a></div>
            	<div class="clearfix"></div> 

			<div class="collapse" id="collapseExample">
  				<div style="inline-box-align:initial; color:#000; padding:1em 1em; margin:0.5em 1em; background-color: #FFF; border-radius:1em;">
    		一、會員合約除本文件所約定之內容外，露天拍賣已經公佈及將來可能公佈之使用規範、辦法、處理原則、政策、及相關服務
               說明等，均為會員合約的一部份；會員除須同意並遵守本文件所約定之內容外，並應同意並遵守該等已經公佈及將來可能
               公佈之使用規範、辦法、處理原則、政策、及相關服務說明。
				得隨時修改會員合約之約定內容，包括修改已經公佈及將來可能公佈之使用規範、辦法、處理原則、政策、及相關服務說				
                明等；修改後之內容，除另有說明者外，自公告時起生效。自生效日起，如會員繼續使用本服務，即視為會員已閱讀、暸
                解、並同意修改後的所有內容；如會員不同意修
  				</div>
			</div>
<style>
#aaa{
display:none;
	position:absolute;
	width:50%;
	top:0px;
	left:-5%;
}
#aaa:target{
	display:block;
}

</style>
<div id="aaa" style="inline-box-align:initial; color:#000; padding:1em 1em; margin:0.5em 1em; background-color: #FFF; border-radius:1em;">
    		一、會員合約除本文件所約定之內容外，露天拍賣已經公佈及將來可能公佈之使用規範、辦法、處理原則、政策、及相關服務
               說明等，均為會員合約的一部份；會員除須同意並遵守本文件所約定之內容外，並應同意並遵守該等已經公佈及將來可能
               公佈之使用規範、辦法、處理原則、政策、及相關服務說明。
				得隨時修改會員合約之約定內容，包括修改已經公佈及將來可能公佈之使用規範、辦法、處理原則、政策、及相關服務說				
                明等；修改後之內容，除另有說明者外，自公告時起生效。自生效日起，如會員繼續使用本服務，即視為會員已閱讀、暸
                解、並同意修改後的所有內容；如會員不同意修
  				</div>
			</div>
            <div class="col-xs-12" style=" margin-top:1em; text-align:center;">
            	<button type="button" class="btn btn-info" style=" width:6em; border-radius:30px; margin:1em;">
                重新輸入</button>
				<button type="button" class="btn btn-warning" style=" width:6em; border-radius:30px; margin:1em;" >
                確認</button>
            </div>
			</div>
        </div>
	</div>
</form>
    <!--Register End-->
    <!--footer page begining-->
<div class="container-fluid">

	<div class="row ben-footer-bg" style="background-color:#FF6666; color:#FFF; margin-top:2em;">

		<div class="col-xs-12 hidden-xs col-sm-3"><img src="images/Logo-01.png" width="326" height="83" class="img-responsive"></div>
		<div class="col-xs-12 col-sm-3 ">
		<p class="ben-footer-text01">關於我們</p>
            <ul class="ben-footer-text">
            <li>關於我們</li>
            <li>服務條款</li>
            <li>最新消息容</li>
            </ul>
		</div>
		<div class="col-xs-12 col-sm-3 ben-footer-align01">
		<p class="ben-footer-text01">會員服務</p>
            <ul class="ben-footer-text">
            <li>會員須知</li>
            <li>加入會員</li>
            <li>忘記密碼</li>
            <li>我的訂單</li>
            <li>我的購物車</li>
            </ul>
		</div>
		<div class="col-xs-12 col-sm-3 ben-footer-align02">
   		<p class="ben-footer-text01">聯絡我們</p>
            <ul class="ben-footer-text" style="list-style:none; margin-left:-1.5em;">
            <li>客服信箱: buonoservice@gmail,com</li>
            <li>客服電話: 04-12345678<br>
                (周一至周五)09:00~18:00)</li>
            <li>FAQ </li>
            <li>Q&A </li>
            </ul>
		</div>
	</div>
</div>
    <!--footer page End-->
       
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
