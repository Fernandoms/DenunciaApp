{extends 'layout.tpl'}
{block name=content}
<h3 class="text-center">#Visualizar Usuário</h3>
<div class="row" style="padding: 10px;">
	<div class="col-md-3">
		<img src="{$user->getPhoto()}" class="img-thumbnail">
	</div>
	<div class="col-md-9">
        <form name="edit" method="post" class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-sm-3 control-label">Nome</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" value="{$user->getName()}" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Foto</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" value="{$user->getPhoto()}" disabled>
				</div>
			</div>
		</form>
	</div>
</div>
{/block}
