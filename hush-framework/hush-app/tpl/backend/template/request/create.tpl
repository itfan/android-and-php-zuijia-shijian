{include file="frame/head.tpl"}

<div class="maintop">
<img src="{$_root}img/icon_arrow_right.png" class="icon" /> 创建申请
</div>

<div class="mainbox">

{include file="frame/error.tpl"}

{if $modelform}
<form id="create_form" method="post">
	<table class="titem">
	<tr><td class="field">申请主题</td><td class="value"><input name="bpm_request_subject" class="text" type="text" value="{$request.bpm_request_subject}" /></td></tr>
	{$modelform}
	<tr>
		<td class="submit" colspan="2">
			<input type="button" value="保存" id="submit_btn" />
			<input type="button" value="返回" onclick="javascript:$.form.jumpto('/request/selectFlow');" />
		</td>
	</tr>
	</table>
</form>
{else}
<input type="button" value="返回" onclick="javascript:$.form.jumpto('/request/selectFlow');" />
{/if}

<script type="text/javascript">
$('#submit_btn').click(function(){
	if (confirm('申请提交后内容不可修改，是否继续？')) {
		$('#create_form').submit();
	}
});
</script>

</div>

{include file="frame/foot.tpl"}