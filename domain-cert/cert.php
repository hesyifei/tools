<?php include "../function.php"; ?>
<?php
include "err_message.php";						//彩蛋
if(empty($_SERVER['HTTP_REFERER'])){
	$err_message = "請不要直接訪問此頁面";
}
if (isset($err_message)){						//錯誤提示兼彩蛋
?>
<?php get_header("域名證書生成"); ?>
<div class="<?php echo get_alert_class('danger'); ?>">
	<?php echo $err_message; ?>
</div>
<?php get_footer(); ?>
<?php die(); ?>
<?php
}
$domain = htmlspecialchars($_POST['domain']);
$chinese_name = htmlspecialchars($_POST['chinese_name']);
$english_name = htmlspecialchars($_POST['english_name']);
$register_date = htmlspecialchars($_POST['register_date']);
$upcoming_date = htmlspecialchars($_POST['upcoming_date']);
$chinese_address = htmlspecialchars($_POST['chinese_address']);
$english_address = htmlspecialchars($_POST['english_address']);
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>域名证书</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<link href="style.css" rel="stylesheet" />
</head>
<body class="cert-body">
<table width="600" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td height="76">
			<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
				<tr>
					<td rowspan="12" width="1" bgcolor="#000000"></td>
					<td bgcolor="#000000" height="1" colspan="3"></td>
					<td rowspan="12" bgcolor="#000000" width="1"></td>
				</tr>
				<tr>
					<td colspan="3" align="center" background="images/xinnet_fontbg.gif" bgcolor="#FFFFFF">
						<br>
						<br>
						<br>
						<img src="images/coin.gif" width="222" height="153" />
						<br>
						<img src="images/title.gif" width="350" height="65" />
						<br>
						<span style="color: #999999;">ICANN 标志由国际名字及 IP 地址分配机构所持有</span>
						<br>
						<br>
						<br>
						<table width="500" border="0" cellspacing="0" cellpadding="3">
							<tr class="L13">
								<td>
									<p align="left">
										<span class="p10">
											<b>国际顶级域名权威机构ICANN</b>(The Internet Corporation for Assigned Names and Numbers)授权新网Xinnet.com制作并颁发此证。<b>证明</b>：
										</span>
									</p>
									<p align="left">域名 <span style="color: blue;"><b><?php echo $domain; ?></b></span> 已由 <span style="color: blue;"><?php echo $chinese_name; ?></span> 注册，并已在国际顶级域名数据库中备案。</p>
									<p align="left">
										<span class="L13 Verdana_8">
											This certificate was issued by xinnet.com, which is authorized by ICANN(The Internet Corporation for Assigned Names and Numbers).
										</span>
										<br>
										<br>
										<span class="Verdana_8 L13">This is to certify that <span style="color: #FF0000;"><?php echo $english_name; ?></span> has registered the domain name <span style="color: #FF0000;"><?php echo $domain; ?></span> and the registration has taken effect since it was put on records in the database of gTLD(global Top Level Domain) in ICANN.</span>
									</p>
								</td>
							</tr>
						</table>
						<br>
						<table width="500" border="1" cellspacing="0" cellpadding="2" bordercolorlight="#666666" bordercolordark="#FFFFFF">
							<tr align="left"> 
								<td width="211" align="right">域名：</td>
								<td width="275">&nbsp;<?php echo $domain; ?></td>
							</tr>
							<tr align="left">
								<td width="211" class="Verdana_8" align="right">Domain Name：</td>
								<td width="275">&nbsp;<?php echo $domain; ?></td>
							</tr>
							<tr align="left">
								<td width="211" align="right">注册所有人：</td>
								<td width="275">&nbsp;<?php echo $chinese_name; ?></td>
							</tr>
							<tr align="left">
								<td width="211" class="Verdana_8" align="right">Registrant：</td>
								<td width="275">&nbsp;<?php echo $english_name; ?></td>
							</tr>
							<tr align="left">
								<td width="211" align="right">注册时间：</td>
								<td width="275">&nbsp;<?php echo $register_date; ?></td>
							</tr>
							<tr align="left">
								<td width="211" class="Verdana_8" align="right">Registration Date：</td>
								<td width="275">&nbsp;<?php echo $register_date; ?></td>
							</tr>
							<tr align="left">
								<td width="211" align="right">到期时间：</td>
								<td width="275">&nbsp;<?php echo $upcoming_date; ?></td>
							</tr>
							<tr align="left">
								<td width="211" class="Verdana_8" align="right">Expiration Date：</td>
								<td width="275">&nbsp;<?php echo $upcoming_date; ?></td>
							</tr>
							<tr align="left">
								<td width="211" align="right">通信地址：</td>
								<td width="275">&nbsp;<?php echo $chinese_address; ?></td>
							</tr>
							<tr align="left">
								<td width="211" class="Verdana_8" align="right">Address：</td>
								<td width="275">&nbsp;<?php echo $english_address; ?></td>
							</tr>
						</table>
						<p class="center">本证书仅用于证明该域名是通过北京新网数码信息技术有限公司注册，且证书信息为当时域名信息。</p>
						<p class="center">本证书并不做为其他证明文件之用！</p>
						<p class="center">北京新网数码信息技术有限公司是全球ICANN授权的国际域名注册服务商！</p>
						<div id="Layer1"><img src="images/zhang.gif" width="200" height="144"></div>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="3">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FF9900">
							<tr bgcolor="#CC0000">
								<td height="20">
									<div class="center"></div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td height="1" bgcolor="#000000" colspan="3"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>