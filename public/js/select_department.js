$(function(){
    $('#select-department').on('change',onSelectDepartmentChange);
});


function onSelectDepartmentChange() {
    var id = $(this).val();
    if (! id){
        $('#select-municipio').html('<option value=""> Seleccione Municipio</option>');

    }
    $.get('/api/department/'+id+'/municipios', function (data) {

        var html_select = '<option value=""> Seleccione Municipio</option>';
        for (var i=0; i<data.length; ++i)
            html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>'
        //alert(data);
     //  console.log(html_select);
        $('#select-municipio').html(html_select);
        });

}
