<!-- Essential javascripts for application to work-->
    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>

	<script src="./assets/js/jqueryAjaxEditar.js"></script>

	<script type="text/javascript" src="./assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="./assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
	$('#tablaGasto').DataTable({
		responsive: true,
		autoWidh: false,

		"language":{
			"lengthMenu": "Mostrar " +
						`<select class="custom-select custom-select-sm form-control form-control-sm">
							<option value="5">5</option>
							<option value="10">10</option>
							<option value="20">20</option>
							<option value="-1">All</option>
						</select> ` + 
						"registros por página",
						"ZeroRecords": "Nada encontrado",
						"info": "Página _PAGE_ de _PAGES_",
						"infoEmpty": "No recors available",
						"infoFiltered": "(Filtrado de _MAX_ registro totales)",
						'search': 'Buscar:',
						'paginate':{
							'next': 'Siguente',
							'previous': 'Anterior'
						}

		}
	});

	</script>
    </body>
</html>