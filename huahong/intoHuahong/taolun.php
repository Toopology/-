<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>华鸿控股 - 发展思路</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main"><!-- start header -->
<div id="header">
	<div id="logo1">
		<img src ="../images/aboutus_01.jpg" width="100%" height="100%" \>
	</div>
	<div class="header1">
			<nav class="main1" >
				<ul class="list">
					<li><a href="../intoHuahong/index.html">首页</a></li>
                    <li><a href="../intoHuahong/index.html">走进华鸿</a></li>
					<li><a href="#">企业文化</a>
					    <ul class="menu_two" >
					    	<li><a href="../intoHuahong/jingshen.html" style="width: 160px;">企业精神</a></li>
					    	<li><a href="../intoHuahong/linian.html" style="width: 160px;">经营理念</a></li>
					    	<li><a href="../intoHuahong/tuandui.html" style="width: 160px;">团队精神</a></li>
					    </ul>  
					</li>
                    <li><a herf="#">企业建设</a>
                        <ul class="menu_two">
                            <li><a href="../intoHuahong/silu.html" style="width: 160px;">发展思路</a></li>
					    	<li><a href="../intoHuahong/taolun.php" style="width: 160px;">热点讨论</a></li>
                        </ul>
                    </li>	
					<li><a href="../intoHuahong/contactus.html">联系我们</a></li>
					<li><a href="#">加入收藏</a></li>
				</ul>
			</nav>
		</div>
	</div>	
<!-- end header -->
</div>
<div id='page'>
	<div id='left'>
        <p>
            <?
							include "conn.php";
							$conn=mysql_connect($url,$c_username,$c_password);

         			if(mysql_select_db("hhkg")){
         				mysql_query("SET NAMES 'gbk'");
         				$sql="select * from information where type='热点讨论'";
         				$result=mysql_query($sql);
         				$total=mysql_num_rows($result);
         				if($total%20==0){
         					$maxpage=intval($total/20);
         				}
         				$maxpage=intval($total/20)+1;
         				$npage=$_GET['npage'];
         				if($npage<=0){
         					$npage=1;
         				}
         				if($npage==$maxpage){
         					$npage=$maxpage;
         				}
         				$first=20*($npage-1);
         				$sql="select * from information where type='热点讨论' order by id desc limit $first,20";
         				$result=mysql_query($sql);
						?>
          </p>
        <br>

		<div style="margin-left: 50px; margin-top: 30px; ">
			<p style="text-align: center; font-size: 5px; margin-bottom: 0px; margin-top: 10px;">
				版权所有 &copy; 2008<img src="../images/bottom_huahong.gif">上海国城土地房地产估价有限公司 <img src="../images/huahong_badge.gif" width="34" height="41">
			</p>
		</div>
	</div>
	<div id='right'>
		<img src="../images/jzsc.gif" alt="">
	</div>
	
</div>
<!-- start footer -->
<div id="footer">
	<p>
        地址:上海市黄浦路99号(上海滩国际大厦)22楼 邮编:200080 电话:021-63830000 传真:021-63831700 网址:http://www.hhkg.com.cn
	  </p>
	  <p align='center'>
	  <a href="http://www.miibeian.gov.cn" target="_blank" >
        ICP证: 沪ICP备10026992号
	  </a>
	  </p>
</div>
</div>
<!-- end footer -->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>