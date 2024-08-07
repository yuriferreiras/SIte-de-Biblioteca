<h1>Cadastrar Atendente</h1>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_atendente" class="form-control">
    </div>
	<div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf_atendente" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-Mail</label>
        <input type="email" name="email_atendente" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="fone_atendente" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>