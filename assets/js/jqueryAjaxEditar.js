
    $(document).ready(function(){
        $('.editarbtn').on('click', function(){
            $('#editarModalGasto').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
            return $(this).text();
            }).get();

            // console.log(data);

            $('#idGasto').val(data[0]);
            $('#descripcion').val(data[2]);
            $('#monto').val(data[3]);
        });
    });
