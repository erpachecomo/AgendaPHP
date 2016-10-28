/**
 * Created by ernesto on 27/09/16.
 */

$(document).ready(function() {
    $('#contactos').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json'
        },
        ajax: {
            url:  "../src/ConsultarContactos.php",
            dataSrc:""
        },
        columns: [
            { data: "id"},
            { data: "telefono"},
            { data: "tipo"},
            { data: "nombre"},
            { data: "ciudad"},
            { data: "domicilio"},
            { data: "email"}
        ]
    } );
} );
