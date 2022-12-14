<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Carrinho</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a id="navTitle" class="navbar-brand" href="carrinho.php"></a>
	    </div>
	  </div>
	</nav>

	<div class="container-fluid">
		<div class="form-inline">
			<div class="form-group">
				<input type="text" class="form-control" id="desc" placeholder="Descrição">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="amount" placeholder="Quantidade">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="value" placeholder="Valor">
			</div>
			<span id="btnUpdate" style="display: none;">
				<span id="inputIDUpdate"></span>
				<button onclick="updateData();" class="btn btn-default">Save</button>
				<button onclick="resetForm();" class="btn btn-default">Cancel</button>
			</span>
			<span id="btnAdd">
				<button onclick="addData();" class="btn btn-default">Adicionar</button>
				<button onclick="resetForm();" class="btn btn-default">Resetar pedido</button>
				<button onclick="deleteList();" class="btn btn-default">Limpar carrinho</button>
			</span>
		</div>

		<div id="errors" style="display: none;"></div>

		<table id="listTable" class="table">
		
		</table>
	</div>

	<nav class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<h4 class="text-center text-success">Total: <span id="totalValue">$ 0,00</span></h4>
		</div>
	</nav>

	<script type="text/javascript" src="../assets/scripts/config.js"></script>
	<script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>
</html>
