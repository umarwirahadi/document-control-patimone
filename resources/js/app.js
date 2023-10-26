var loadingIndicator='<div class="spinner-border"></div></div>';

$(document).on('click','#btnCreate',function(){
    let originButton=$(this).html();
    $.ajax({
        url:$(this).attr('data-url'),
        type:'GET',
        dataType:'json',
        beforeSend:function(){
            $('#btnCreate').html(loadingIndicator);
        },
        success:function(data){
          $(".modal-content").html(data); 
          $('#datamodal').modal('show');
            // var ModalCreatePosition = new bootstrap.Modal(document.getElementById('datamodal'), {backdrop:'static',keyboard:false});
            // ModalCreatePosition.show();
        },error:function(){
            $('#btnCreate').html(originButton);
        },
        complete:function(){
            $('#btnCreate').html(originButton);
        }
      })
});
$(document).on('submit','#formposition',function(e){
    let originButton=$('#formposition button[type="submit"]').html();
    e.preventDefault();
    $.ajax({
      url: $(this).attr('action'),
      type: $(this).attr('method'),
      data: $(this).serialize(),
      dataType: 'json',
      beforeSend:function(){
        $('#formposition button[type="submit"]').html(loadingIndicator);
      },
      success: function (data) {
        if(data.success){
            $('#datamodal').modal('toggle');
        }

        console.log(data);
      },
      error: function (a) {
        console.log(a);    
      },
      complete:function(){
        $('#formposition button[type="submit"]').html(originButton);
      }
    });
  });
  
  $('#data-position').Datatable();
  /* var tablePosition = $('#data-position').DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: $('#data-position').attr('data-url'),
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'position_code', name: 'position_code'},
        {data: 'position_name', name: 'position_name'},
        {data: 'category', name: 'category'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
}); */