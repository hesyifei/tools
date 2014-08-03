<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '想製作一個別有風格的翻譯結果？快來試試由AREFLY及ENGMN精心打造的「個性化翻譯生成器」',
	'keywords' => '翻譯',
);
?>
<?php get_header("個性化翻譯生成器", $seo); ?>
<?php
$var_name = array('name' => "Arefly", 'eng_pro' => "are+fly", 'usa_pro' => "are-fly", 'adj' => "瘋狂的", 'adv' => "瘋狂地", 'n' => "狂人;超級efly;", 'v' => "使人抓狂", 'eg_en' => "Areflying Arefly have been areflied by arefly areflily.", 'eg_cn' => "狂人瘋狂地使瘋狂的超級efly抓狂了。", 'transname' => "非鄭鬼翻譯");
foreach($var_name as $var => $default_var){
	if(!empty($_POST[$var])){
		${$var} = htmlspecialchars($_POST[$var]);
	}else{
		if(isset($_POST['submit'])){
			if(in_array($var, array("adj", "adv", "v", "n"))){
				${$var} = htmlspecialchars($_POST[$var]);
			}else{
				${$var} = htmlspecialchars($default_var);
			}
		}else{
			${$var} = htmlspecialchars($default_var);
		}
	}
	if(${$var} == $default_var){
		${$var.'_val'} = 'placeholder="'.${$var}.'"';
	}else{
		${$var.'_val'} = 'value="'.${$var}.'"';
	}
}
?>
<div class="text-center <?php echo get_alert_class('info'); ?>">
	使用方法：在下方各個文本框輸入您想生成的字詞即可！<br />（形容詞/副詞/動詞/名詞無需全部填寫！）
</div>
<form class="form-horizontal" action="" method="POST" role="form" style="margin: 0 auto;">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">單詞名稱</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="name" name="name" <?php echo $name_val; ?> required="required" />
		</div>
		<label for="transname" class="col-sm-1 control-label" style="font-size: 13px;">翻譯器名稱</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="transname" name="transname" <?php echo $transname_val; ?> />
		</div>
	</div>
	<div class="form-group">
		<label for="eng_pro" class="col-sm-2 control-label">英式音標</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="eng_pro" name="eng_pro" <?php echo $eng_pro_val; ?> required="required" />
		</div>
		<label for="usa_pro" class="col-sm-1 control-label">美式音標</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="usa_pro" name="usa_pro" <?php echo $usa_pro_val; ?> required="required" />
		</div>
	</div>
	<div class="form-group">
		<label for="adj" class="col-sm-2 control-label">形容詞解釋</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="adj" name="adj" <?php echo $adj_val; ?> />
		</div>
		<label for="adv" class="col-sm-1 control-label">副詞解釋</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="adv" name="adv" <?php echo $adv_val; ?> />
		</div>
	</div>
	<div class="form-group">
		<label for="v" class="col-sm-2 control-label">動詞解釋</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="v" name="v" <?php echo $v_val; ?> />
		</div>
		<label for="n" class="col-sm-1 control-label">名詞解釋</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="n" name="n" <?php echo $n_val; ?> />
		</div>
	</div>
	<div class="form-group">
		<label for="eg_en" class="col-sm-2 control-label">英文例句</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" id="eg_en" name="eg_en" <?php echo $eg_en_val; ?> required="required" />
		</div>
	</div>
	<div class="form-group">
		<label for="eg_cn" class="col-sm-2 control-label">中文例句</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" id="eg_cn" name="eg_cn" <?php echo $eg_cn_val; ?> required="required" />
		</div>
	</div>
	<div class="form-group">
		<div class="centerd">
			<button type="submit" class="<?php echo get_btn(); ?>" name="submit" id="submit">生成</button>
		</div>
	</div>
</form>
<div class="result-op c-container">
	<h3 class="t c-gap-bottom-small">
		<a href="#"><em><?php echo $name; ?></em>_<?php echo $transname; ?></a>
	</h3>
	<div class="c-border">
		<div>
			<div class="op_dict3_readline c-clearfix">
				<div class="op_dict3_read1">
					<table border="0" cellspacing="0" cellpadding="0" class="op_dict_table">
						<tbody>
							<tr>
								<td><span class="op_dict3_font24 op_dict3_marginRight"><?php echo $name; ?></span></td>
								<td><span class="op_dict3_font14 c-gap-right-small">英</span><span class="op_dict3_font24 c-gap-right-small">[<?php echo $eng_pro; ?>]</span><span><a class="op_dict3_how_read" href="#" onclick="return false;" hidefocus="true"></a></span></td>
								<td><span class="op_dict3_font14 c-gap-right-small">美</span><span class="op_dict3_font24 c-gap-right-small">[<?php echo $usa_pro; ?>]</span><span><a class="op_dict3_how_read op_dict3_extread" href="#" onclick="return false;" hidefocus="true"></a></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<?php if(!empty($adj)){ ?>
			<table border="0" cellspacing="0" cellpadding="0" class="op_dict3_english_result_table">
				<tbody>
					<tr>
						<td><span class="op_dict_text1 c-gap-right">adj.</span></td>
						<td><span class="op_dict_text2"><?php echo $adj; ?></span></td>
					</tr>
				</tbody>
			</table>
			<?php } ?>
			<?php if(!empty($adv)){ ?>
			<table border="0" cellspacing="0" cellpadding="0" class="op_dict3_english_result_table">
				<tbody>
					<tr>
						<td><span class="op_dict_text1 c-gap-right">adv.</span></td>
						<td><span class="op_dict_text2"><?php echo $adv; ?></span></td>
					</tr>
				</tbody>
			</table>
			<?php } ?>
			<?php if(!empty($v)){ ?>
			<table border="0" cellspacing="0" cellpadding="0" class="op_dict3_english_result_table">
				<tbody>
					<tr>
						<td><span class="op_dict_text1 c-gap-right">v.</span></td>
						<td><span class="op_dict_text2"><?php echo $v; ?></span></td>
					</tr>
				</tbody>
			</table>
			<?php } ?>
			<?php if(!empty($n)){ ?>
			<table border="0" cellspacing="0" cellpadding="0" class="op_dict3_english_result_table">
				<tbody>
					<tr>
						<td><span class="op_dict_text1 c-gap-right">n.</span></td>
						<td><span class="op_dict_text2"><?php echo $n; ?></span></td>
					</tr>
				</tbody>
			</table>
			<?php } ?>
			<div class="op_dict3_lineone_result" style="display: block;">
				<span>[例句]</span><?php echo $eg_en; ?>
			</div>
			<div class="op_dict3_linetwo_result" style="display: block;"><?php echo $eg_cn; ?></div>
			<p class="op_dict3_more_example" style="display: block;"><a class="op_dict3_more_example_link" href="#" onclick="return false;" hidefocus="true">更多範例用法&gt;&gt;</a></p>
		</div>
	</div>        
	<div class="c-gap-top-small">
		<span class="c-showurl">tools.arefly.com</span>
		<span class="c-tools">
			<a class="c-tip-icon"><i class="c-icon c-icon-triangle-down-g"></i></a>
		</span>
	</div>
</div>
<?php
$footer = array(
	'more_footer' => '請不要將此工具用於非法用途，否則後果自負！',
	'more_footer_copyright' => '<a href="http://www.engmn.com/" target="_blank">Gaukas</a>',
);
?>
<?php get_footer($footer); ?>