
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var loadingIndicator='<div class="spinner-border spinner-border-sm"></div> loading';
    toastr.options={"showDuration":100,"hideDuration": 300};
    

    
    
    var tablePosition = $('#data-position').DataTable({
        processing: true,
        serverSide: true,
        responsive: false,
        ajax: $('#data-position').attr('data-url'),
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'position_code', name: 'position_code'},
            {data: 'position_name', name: 'position_name'},
            {data: 'category', name: 'category'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    var tableWorkItems = $('#data-work-items').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        scrollY:'400px',
        scrollCollapse:true,
        ajax: $('#data-work-items').attr('data-url'),
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',width:'5%'},
            {data: 'item_no', name: 'item_no',width:'10%'},
            {data: 'pay_item', name: 'pay_item',width:'60%'},
            {data: 'unit', name: 'unit',width:'10%'},
            {data: 'action', name: 'action', orderable: false, searchable: false,width:'15%'},
        ]
    });

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
          $("#datamodal").html(data); 
          $('#datamodal').modal('show');
          const attrID=document.querySelectorAll('.text-area');
          for (let i = 0; i < attrID.length; i++) {
            $.fn.createCkeditor(`#${attrID[i].id}`);
          }
          
          
        },error:function(){
            $('#btnCreate').html(originButton);
        },
        complete:function(){
            $('#btnCreate').html(originButton);
            $('select').select2({theme: 'bootstrap4'});
        },error:function(xhr){
          if(xhr.status == 422) {
            $.each(xhr.responseJSON.errors,function(key,value){
              toastr.error(value);
            });
          } else {
            Swal.fire(
              'Error',
              'Error occurred..!',
              'error'
            ).then(function(){
              window.location.reload();
            })
          }
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
        tablePosition.ajax.reload();
          Swal.fire(
              'Success',
              data.message,
              data.success ? 'success' :'warning'
            )
          $('#datamodal').modal('toggle');
      },
      error: function (a) {
        
        if(a.status==422){
            $.each(a.responseJSON.errors, function (i, v) {
                toastr.error(v)
            })          
          } else {
            toastr.error('Error..!');
          } 
      },
      complete:function(){
        $('#formposition button[type="submit"]').html(originButton);
      }
    });
  });
  $(document).on('click','#data-position .edit-form',function(){
    let originButton=$(this).html();
    let buttonID=$(this).attr('data-id');
    $.ajax({
        url:$(this).attr('data-url'),
        type:'GET',
        dataType:'json',
        beforeSend:function(){
            $("button[id='edit"+buttonID+"']").html(loadingIndicator);
        },
        success:function(data){
          $("#datamodal").html(data); 
          $('#datamodal').modal('show');
        },error:function(){
            $("button[id='edit"+buttonID+"']").html(originButton);
        },
        complete:function(){
            $("button[id='edit"+buttonID+"']").html(originButton);
        }
      });
  });
  $(document).on('click','#data-position .delete',function(){
    let url=$(this).attr('data-url');
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this data, please ensure...!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        showConfirmButton:true,
      }).then((isConfirmed) => {
        if (isConfirmed.value) {
            $.ajax({
                url:url,
                type:'DELETE',
                dataType:'json',
                success:function(data){
                    Swal.fire(
                        data.success ? 'success' : 'error',
                        data.message,
                        data.success ? 'success' : 'error'
                        ).then(()=>{
                            tablePosition.ajax.reload();
                        })
                }
              });
        }
          return false;
      });
  });
  $(document).on('click','#btnRefreshPosition',function(){
    window.location.href=$(this).attr('data-url');
  });
  
  $(document).on('submit','#formWorkItem',function(e){
    let originButton=$('#formposition button[type="submit"]').html();
    e.preventDefault();
    $.ajax({
      url: $(this).attr('action'),
      type: $(this).attr('method'),
      data: $(this).serialize(),
      dataType: 'json',
      beforeSend:function(){
        $('#formWorkItem button[type="submit"]').html(loadingIndicator);
      },
      success: function (data) {
        tableWorkItems.ajax.reload();
          Swal.fire('Success',data.message,data.success ? 'success' :'warning')
          $('#datamodal').modal('toggle');
      },
      error: function (a) {
        if(a.status==422){
            $.each(a.responseJSON.errors, function (i, v) {
                toastr.error(v)
              });
          } else {
            toastr.error('Error..!');
          } 
      },
      complete:function(){
        $('#formWorkItem button[type="submit"]').html(originButton);
      }
    });
  });
  $(document).on('click','#data-work-items .edit-form',function(){
    let originButton=$(this).html();
    let buttonID=$(this).attr('data-id');
    $.ajax({
        url:$(this).attr('data-url'),
        type:'GET',
        dataType:'json',
        beforeSend:function(){
            $("button[id='edit"+buttonID+"']").html(loadingIndicator);
        },
        success:function(data){
          $("#datamodal").html(data); 
          $('select').select2({theme:'bootstrap4'});
          $('#datamodal').modal('show');
        },error:function(){
            $("button[id='edit"+buttonID+"']").html(originButton);
        },
        complete:function(){
            $("button[id='edit"+buttonID+"']").html(originButton);
        }
      });
  });
  $(document).on('click','#data-work-items .delete',function(){
    let url=$(this).attr('data-url');
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this data, please ensure...!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((isConfirmed) => {
        if (isConfirmed.value) {
            $.ajax({
                url:url,
                type:'DELETE',
                dataType:'json',
                success:function(data){
                    Swal.fire(
                        data.success ? 'success' : 'error',
                        data.message,
                        data.success ? 'success' : 'error'
                        ).then(()=>{
                          tableWorkItems.ajax.reload();
                        })
                }
              });
        }
        return false;
      });
  });

  var tableEngineer = $('#data-engineer').DataTable({
    processing: true,
    serverSide: true,
    responsive: false,
    ajax: $('#data-engineer').attr('data-url'),
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'eng_code', name: 'eng_code'},
        {data: 'fullname', name: 'fullname'},
        {data: 'eng_phone', name: 'eng_phone'},
        {data: 'eng_email', name: 'eng_email'},
        {data: 'type', name: 'type'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});


$(document).on('submit','#formEngineer',function(e){
  let originButton=$('#formStoreEngineer button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formStoreEngineer button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tableEngineer.ajax.reload();
        Swal.fire('Success',data.message,data.success ? 'success' :'warning')
        $('#datamodal').modal('toggle');
    },
    error: function (a) {
      if(a.status==422){
          $.each(a.responseJSON.errors, function (i, v) {
            toastr.error(v);
            // $(`<div class="text text-sm text-danger">${v}</div>`).insertAfter('input[name="'+ i+'"]');
            // $('input[name="'+ i+'"]').append(`<div class="text text-sm text-danger">${v}</div>`);
          })          
        } else {
          toastr.error('Error..!');
        } 
    },
    complete:function(){
      $('#formStoreEngineer button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#data-engineer .edit-form',function(){
  let originButton=$(this).html();
  let buttonID=$(this).attr('data-id');
  $.ajax({
      url:$(this).attr('data-url'),
      type:'GET',
      dataType:'json',
      beforeSend:function(){
          $("button[id='edit"+buttonID+"']").html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data); 
        $('#datamodal').modal('show');
      },error:function(){
          $("button[id='edit"+buttonID+"']").html(originButton);
      },
      complete:function(){
          $("button[id='edit"+buttonID+"']").html(originButton);
      }
    });
});
$("input[data-bootstrap-switch]").each(function(){
  $(this).bootstrapSwitch('state', $(this).prop('checked'));
});
$(document).on('click','#data-engineer .delete',function(){
  let url=$(this).attr('data-url');
  Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete this data, please ensure...!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      showConfirmButton:true,
    }).then((isConfirmed) => {
      if (isConfirmed.value) {
          $.ajax({
              url:url,
              type:'DELETE',
              dataType:'json',
              success:function(data){
                  Swal.fire(
                      data.success ? 'success' : 'error',
                      data.message,
                      data.success ? 'success' : 'error'
                      ).then(()=>{
                        tableEngineer.ajax.reload();
                      })
              }
            });
      }
        return false;
    });
});
$('#formPhoto').on('submit',function(e){
  e.preventDefault();
  let originButton=$('#formPhoto button[type="submit"]').html();
    $.ajax({
      url: $(this).attr('action'),
      type: $(this).attr('method'),
      data: new FormData(this),
      cache:false,
      contentType: false,
      processData: false,
      beforeSend:function(){
        $('#formPhoto button[type="submit"]').html(loadingIndicator);
      },
      success: function (data) {
        tablePosition.ajax.reload();
          Swal.fire('Success',data.message,data.success ? 'success' :'warning')
      },
      error: function (a) {
        if(a.status==422){
            $.each(a.responseJSON.errors, function (i, v) {
                toastr.error(v)
            })          
          } else {
            toastr.error('Error..!');
          } 
      },
      complete:function(){
        $('#formPhoto button[type="submit"]').html(originButton);
      }
    });
});

$('#photo_profile').on('change', function () {
  const file = this.files[0];
  if (file) {
    let readerFile = new FileReader();
    readerFile.onload = function (e) {
      $('#photo-preview').attr('src', e.target.result);
    }
    readerFile.readAsDataURL(file);
  }    
});

var tableContact = $('#data-contact').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  scrollY:'200px',
  scrollCollapse:true,
  ajax: $('#data-contact').attr('data-url'),
  columns: [
      {data: 'DT_RowIndex', name: 'DT_RowIndex'},
      {data: 'fullname', name: 'fullname'},
      {data: 'primary_email', name: 'primary_email'},
      {data: 'phone_1', name: 'phone_1'},
      {data: 'type', name: 'type'},
      {data: 'action', name: 'action', orderable: false, searchable: false},
  ]
});
$(document).on('submit','#formContact',function(e){
  let originButton=$('#formContact button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formContact button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tableContact.ajax.reload();
        Swal.fire('Success',data.message,data.success ? 'success' :'warning')
        $('#datamodal').modal('toggle');
    },
    error: function (a) {
      if(a.status==422){
          $.each(a.responseJSON.errors, function (i, v) {
            toastr.error(v);
          })          
        } else {
          toastr.error('Error..!');
        } 
    },
    complete:function(){
      $('#formContact button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#data-contact .edit-form',function(){
  let originButton=$(this).html();
  let buttonID=$(this).attr('data-id');
  $.ajax({
      url:$(this).attr('data-url'),
      type:'GET',
      dataType:'json',
      beforeSend:function(){
          $("button[id='edit"+buttonID+"']").html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data); 
        $('#datamodal').modal('show');
      },error:function(){
          $("button[id='edit"+buttonID+"']").html(originButton);
      },
      complete:function(){
          $("button[id='edit"+buttonID+"']").html(originButton);
      }
    });
});
$(document).on('click','#data-contact .delete',function(){
  let url=$(this).attr('data-url');
  Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete this data, please ensure...!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      showConfirmButton:true,
    }).then((isConfirmed) => {
      if (isConfirmed.value) {
          $.ajax({
              url:url,
              type:'DELETE',
              dataType:'json',
              success:function(data){
                  Swal.fire(
                      data.success ? 'success' : 'error',
                      data.message,
                      data.success ? 'success' : 'error'
                      ).then(()=>{
                        tableContact.ajax.reload();
                      })
              }
            });
      }
        return false;
    });
});
$(document).on('click','#btnRefreshContact',function(){
  let originButton=$(this).html();
  $(this).html(loadingIndicator);
  tableContact.ajax.reload();
 $(this).html(originButton);

})

var tablePackage = $('#data-package').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  ajax: $('#data-package').attr('data-url'),
  columns: [
    {data: 'DT_RowIndex', name: 'DT_RowIndex'},  
    {data: 'package_name', name: 'package_name'},
    {data: 'total_days', name: 'total_days'},
    {data: 'description', name: 'description'},
    {data: 'start_date', name: 'start_date'},
    {data: 'end_date', name: 'end_date'},
    {data: 'status', name: 'status'},
    {data: 'action', name: 'action', orderable: false, searchable: false}
  ]
});
$(document).on('submit','#formPackage',function(e){
  let originButton=$('#formPackage button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formPackage button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tablePackage.ajax.reload();
        Swal.fire('Success',data.message,data.success ? 'success' :'warning')
        $('#datamodal').modal('toggle');
    },
    error: function (a) {
      if(a.status==422){
          $.each(a.responseJSON.errors, function (i, v) {
            toastr.error(v);
          })          
        } else {
          toastr.error('Error..!');
        } 
    },
    complete:function(){
      $('#formPackage button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#data-package .edit-form',function(){
  let originButton=$(this).html();
  let buttonID=$(this).attr('data-id');
  $.ajax({
      url:$(this).attr('data-url'),
      type:'GET',
      dataType:'json',
      beforeSend:function(){
          $("button[id='edit"+buttonID+"']").html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data); 
        $('#datamodal').modal('show');
      },error:function(){
          $("button[id='edit"+buttonID+"']").html(originButton);
      },
      complete:function(){
          $("button[id='edit"+buttonID+"']").html(originButton);
      }
    });
});
$(document).on('click','#data-package .delete',function(){
  let url=$(this).attr('data-url');
  Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete this data, please ensure...!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      showConfirmButton:true,
    }).then((isConfirmed) => {
      if (isConfirmed.value) {
          $.ajax({
              url:url,
              type:'DELETE',
              dataType:'json',
              success:function(data){
                  Swal.fire(
                      data.success ? 'success' : 'error',
                      data.message,
                      data.success ? 'success' : 'error'
                      ).then(()=>{
                        tablePackage.ajax.reload();
                      })
              }
            });
      }
        return false;
    });
});
var tableItem = $('#data-item').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  ajax: $('#data-item').attr('data-url'),
  columns: [
    {data: 'DT_RowIndex', name: 'DT_RowIndex'},  
    {data: 'item_code', name: 'item_code'},
    {data: 'item_name', name: 'item_name'},
    {data: 'item_category', name: 'item_category'},
    {data: 'item_status', name: 'item_status'},
    {data: 'action', name: 'action', orderable: false, searchable: false}
  ]
});

var tableLetter = $('#data-letter').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  ajax: $('#data-letter').attr('data-url'),
  columns: [
    {data: 'incoming_ref_no', name: 'incoming_ref_no'},  
    {data: 'date_of_letter', name: 'date_of_letter'},
    {data: 'date_of_receive', name: 'date_of_receive'},
    {data: 'subject', name: 'subject'},
    {data: 'references', name: 'references'},
    {data: 'status', name: 'status'},
    {data: 'action', name: 'action', orderable: false, searchable: false}
  ]
});
$(document).on('submit','#formItem',function(e){
  let originButton=$('#formItem button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formItem button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tableItem.ajax.reload();
        Swal.fire('Success',data.message,data.success ? 'success' :'warning')
        $('#datamodal').modal('toggle');
    },
    error: function (a) {
      if(a.status==422){
          $.each(a.responseJSON.errors, function (i, v) {
            toastr.error(v);
          })          
        } else {
          toastr.error('Error..!');
        } 
    },
    complete:function(){
      $('#formItem button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#data-item .edit-form',function(){
  let originButton=$(this).html();
  let buttonID=$(this).attr('data-id');
  $.ajax({
      url:$(this).attr('data-url'),
      type:'GET',
      dataType:'json',
      beforeSend:function(){
          $("button[id='edit"+buttonID+"']").html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data); 
        $('#datamodal').modal('show');
      },error:function(){
          $("button[id='edit"+buttonID+"']").html(originButton);
      },
      complete:function(){
          $("button[id='edit"+buttonID+"']").html(originButton);
      }
    });
});
$(document).on('click','#data-item .delete',function(){
  let url=$(this).attr('data-url');
  Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete this data, please ensure...!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      showConfirmButton:true,
    }).then((isConfirmed) => {
      if (isConfirmed.value) {
          $.ajax({
              url:url,
              type:'DELETE',
              dataType:'json',
              success:function(data){
                  Swal.fire(
                      data.success ? 'success' : 'error',
                      data.message,
                      data.success ? 'success' : 'error'
                      ).then(()=>{
                        tableItem.ajax.reload();
                      })
              }
            });
      }
        return false;
    });
});
var tableTransmittal = $('#data-transmittal').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  ajax: $('#data-transmittal').attr('data-url'),
  columns: [
    {data: 'incoming_ref_no', name: 'incoming_ref_no'},  
    {data: 'date_of_letter', name: 'date_of_letter'},
    {data: 'date_of_receive', name: 'date_of_receive'},
    {data: 'subject', name: 'subject'},
    {data: 'references', name: 'references'},
    {data: 'status', name: 'status'},
    {data: 'action', name: 'action', orderable: false, searchable: false}
  ]
});

$('.date-picker').datepicker({
  firstDay: 1,
  shortYearCutoff: 50,
  changeMonth: true,
  changeYear: true,
  dateFormat:'d-M-y'
});
$('.data-select').select2({theme:'bootstrap4'});


/*RFI Form*/
$('#data-rfi-draft').DataTable();
$('#data-rfi-sent').DataTable();
$('#data-rfi-approved').DataTable();
$('#data-rfi-rejected').DataTable();

// var ck=$('#contractor_notes').ckeditor();
// CKEDITOR.replace('contractor_notes',{
//   height :'80'
// });

$('.date-picker-2').datepicker({
  defaultDate:'+1w',
  changeMonth:'true',
  numberOfMoths:1,
  beforeShowDay:$.datepicker.noWeekends,
  minDate:2,
  dateFormat:'d-M-y'
});
$('#pay_item_id').select2({
  theme:'bootstrap4',
  placeholder:'choose pay Item no',
  minimumInputLength:2,
  ajax: {
    url: $('meta[name="base_url"]').attr('content')+'/work-item/select',
    dataType: 'json',
    delay:250,
    data: function (params) {
        return {
            q: params.term
        };
    },
    processResults: function (data) {
        return {
            results: data
        };
    },
    cache: true
}
});
$(document).on('click','#btnQlyRFI',function(){
  let originButton=$(this).html();
  $.ajax({
      url:$(this).attr('data-url'),
      dataType:'json',
      beforeSend:function(){
          $('#btnQlyRFI').html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data); 
        $.fn.createCkeditor('#detailed_description');
      
        $('#datamodal').modal('show');

      },error:function(){
          $('#btnQlyRFI').html(originButton);
      },
      complete:function(){
          $('#btnQlyRFI').html(originButton);
          $('select').select2({theme: 'bootstrap4'});
          
      },error:function(xhr){
        if(xhr.status == 422) {
          $.each(xhr.responseJSON.errors,function(key,value){
            toastr.error(value);
          });
        } else {
          Swal.fire(
            'Error',
            'Error occurred..!',
            'error'
          ).then(function(){
            window.location.reload();
          })
        }
      }
    })
});
$(document).on('click','#btnQtyRFI',function(){
  let originButton=$(this).html();
  $.ajax({
      url:$(this).attr('data-url'),
      dataType:'json',
      beforeSend:function(){
          $('#btnQtyRFI').html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data); 
        $('#datamodal').modal('show');
        $.fn.createCkeditor('#inspection_content');
      },error:function(){
          $('#btnQtyRFI').html(originButton);
      },
      complete:function(){
          $('#btnQtyRFI').html(originButton);
          $('select').select2({theme: 'bootstrap4'});
          
      },error:function(xhr){
        if(xhr.status == 422) {
          $.each(xhr.responseJSON.errors,function(key,value){
            toastr.error(value);
          });
        } else {
          Swal.fire(
            'Error',
            'Error occurred..!',
            'error'
          ).then(function(){
            window.location.reload();
          })
        }
      }
    })
});

bsCustomFileInput.init();


$.fn.createCkeditor=function(id=null){
  ClassicEditor.create( document.querySelector( id ),{
    toolbar: {
        items: [
            'undo', 'redo',
            '|', 'heading',
            '|', 'link',
            '|', 'bulletedList', 'numberedList', 'outdent', 'indent'
        ],
        shouldNotGroupWhenFull: false
    }
  } )
  .catch( error => {
      console.error( error );
  } );
}


})
