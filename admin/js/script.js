$(function(){
	$('#btn-upload').on('change', function(){
		$('#upload-file').val($(this).val());
	});
});

$(function(){
	$('.btn-cancelar').on('click', function(){
		window.location.href = "index.php";
	});
});

/*
$(function(){
	
	$("#link-delete").on('click', function( e ){
	   if( confirm('Deseja realmente apagar este registro?') )
		   window.location = $(this).attr('href');
	   else {
		  e.preventDefault();
	   }
	});
});*/

$(function(){
	$('a#link-delete').confirm({
		title: 'Confirmar exclusão!',
		content: 'Deseja realmente excluir o registro?',
		confirmButton: 'Sim',
		cancelButton: 'Não'
	});
});
$(function(){
	$('.data').datepicker({
		format: "dd/mm/yyyy",
		language: "pt-BR",
		orientation: "bottom left"
	});
});

$(function(){
	$('.data').datepicker({
		format: "dd/mm/yyyy",
		language: "pt-BR",
		orientation: "bottom left"
	});
});

$(function(){
	$('#mais-imagens').on('click', function (){
		$("#img-extra").append('<div class="col-md-3"><label class="btn btn-default btn-file">Procurar Imagem<input type="file" style="display: none;" name="img[]" required/></label></div><div class="col-md-9"><input id="upload-file" class="form-control" placeholder="Nenhum arquivo selecionado." disabled="disabled" /></div>');
	});
});



$(function(){
	$('#btn-habilitar').on('click', function(){
		$('#missao').removeAttr('disabled');
		$('#nome').removeAttr('disabled');
		$('#objetivo').removeAttr('disabled');
		$('#historia').removeAttr('disabled');
		$('#telefone').removeAttr('disabled');
		$('#email').removeAttr('disabled');
		$('#valores').removeAttr('disabled');
		$('#desinatarios-de-contato').removeAttr('disabled');
		$('#endereco').removeAttr('disabled');
		$('#sigla').removeAttr('disabled');
		$('#data').removeAttr('disabled');
		$('#mapa').removeAttr('disabled');
		$('#youtube').removeAttr('disabled');
		$('#facebook').removeAttr('disabled');	
		$('#visao').removeAttr('disabled');
		$('#telefone-alternativo').removeAttr('disabled');
		$('#tem-profissional').removeAttr('disabled');
		$('#favicon').removeAttr('disabled');
		$('#historico').removeAttr('disabled');
		$('#logo-principal').removeAttr('disabled');
		$('#logo-secundaria').removeAttr('disabled');
		$('#slogan').removeAttr('disabled');
	});

	$('#editar').on('click', function(){
		$('#titulo_banner').val("Marcelo")
		$('#form-modal').modal('show');
	});
});