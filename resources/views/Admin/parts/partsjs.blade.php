<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>



<script>
            $(document).ready(function() {
                $('#tabla').DataTable({

                    dom: 'Bfrtip',
                    buttons: [
                        'pdf', 'print'
                    ],


                    responsive: true,
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ registros",
                        "zeroRecords": "No hay datos para mostrar - lo siento",
                        "info": "Mostrando pagina _PAGE_ de _PAGES_",
                        "infoEmpty": "No records available",
                        "infoFiltered": "(filtrado de _MAX_ registros totales)",
                        "search": "Buscar:",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior"
                        }
                    },

                });
            });
        </script>


{{---------------------------------Encargados---------------------------------}}

<script>
    var idSelect;

    function eliminarEnc_Alerta(id) {
        idSelect = id;
        console.log(idSelect);
        Swal.fire({
        title: 'Eliminar',
        text: "Estas seguro de eliminar este encargado",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar!'

        }).then((result) => {
    if (result.isConfirmed) {
        eliminarAJAX_Enc();

        Swal.fire(
        'Eliminado!',
        'En breves notara los cambios.',
        'success'
        )
        } 
      })
    }

    function eliminarAJAX_Enc() {
        $.ajax({
            url: "/eliminarEnc_"+idSelect,
            /* type: 'POST', */
            success: function(result) {
                location.reload();
                /* $('#tablaEncargados').DataTable().ajax.reload(); */ ///Revisar despues, por que no se quiere actualizar
            }
        });
    }
</script>

<script>

    $(document).ready(function () {
        $('#tablaEncargados').DataTable();
    });

    </script>

{{---------------------------------Matriculas---------------------------------}}

<script>

    var idSelect;

    function eliminarMat_Alerta(id) {
        idSelect = id;
        console.log(idSelect);
        Swal.fire({
        title: 'Estas seguro?',
        text: "Deseas borrar esta matricula?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar'

        }).then((result) => {
    if (result.isConfirmed) {
        eliminarAJAX_Mat();

        Swal.fire(
        'Eliminado!',
        'En breves notara los cambios.',
        'success'
        )
        } 
    })
    }

    function eliminarAJAX_Mat() {
        $.ajax({
            url: "/eliminarMat_"+idSelect,
            /* type: 'POST', */
            success: function(result) {
                location.reload();
                /* $('#tablaEncargados').DataTable().ajax.reload(); */ ///Revisar despues, por que no se quiere actualizar
            }
        });
    }

    </script>

<script>

    $(document).ready(function () {
        $('#tablaMatriculas').DataTable();
    });

    </script>

{{---------------------------------Grados---------------------------------}}

<script>

    $(document).ready(function () {
        $('#tablaMatriculasinicio').DataTable();
    });

    </script>

<script>

    $('#formGrado').submit(function(e){
        e.preventDefault();
    
        var grado = $("#grado").val();
        var cupo = $("input[name='cupo']").val();

        /* console.log("/update_grado_"+grado); */
    
        $.ajax({
            url: "/update_grado_"+grado,
            type: "POST",
    
            data:{
                grado: grado,
                cupo: cupo,
                "_token": $("meta[name='csrf-token']").attr("content")
            },
            success:function(response){
                if (response) {
                    $('#formGrado')[0].reset(); 
                    Swal.fire(
                        'Actualizado',
                        'El cupo se asigno correctamente',
                        'success'
                        );
                }
            }
        });
    
    
    });
    
    </script>

{{---------------------------------Pagos---------------------------------}}

<script>

    var idSelect;

    function eliminarPago_Alerta(id) {
        idSelect = id;
        console.log(idSelect);
        Swal.fire({
        title: 'Estas seguro?',
        text: "Deseas borrar este pago?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar'

        }).then((result) => {
    if (result.isConfirmed) {
        eliminarAJAX_Pago();

        Swal.fire(
        'Eliminado!',
        'En breves notara los cambios.',
        'success'
        )
        } 
    })
    }

    function eliminarAJAX_Pago() {
        $.ajax({
            url: "/eliminarPago_"+idSelect,
            /* type: 'POST', */
            success: function(result) {
                location.reload();
                /* $('#tablaEncargados').DataTable().ajax.reload(); */ ///Revisar despues, por que no se quiere actualizar
            }
        });
    }

    </script>

<script>

    $(document).ready(function () {
        $('#tablaPagos').DataTable();
    });

    </script>

<script>

    $(document).ready(function () {
        $('#tablaUsuarios').DataTable();
    });

    </script>




    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>    

    @yield('parteJS')