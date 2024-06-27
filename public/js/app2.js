$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var loadingIndicator='<div class="spinner-border spinner-border-sm"></div>';
    const base_url=$('meta[name="base_url"').attr('content');
    toastr.options={"showDuration":100,"hideDuration": 300};

    $( document ).ajaxComplete(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });


/* for general */
$(document).on('click','#btnRefresh',function(){
  window.location.href=$(this).attr('data-url');
});
/* end for */

/* log activity */
$('#data-log').DataTable();
/* end log activity */


    /* data user disini */

var tableUser=$('#data-users').DataTable(
  {
    processing: true,
    serverSide: true,
    responsive: false,
    scrollY:'500px',
    lengthMenu:[[25,50,-1],[25,50,'All']],
    scrollCollapse:true,
    ajax: $('#data-users').attr('data-url'),
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex',searchable:false},
        {data: 'name', name: 'name'},
        {data: 'email', name: 'email'},
        {data: 'level', name: 'level',searchable:false},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
}
);
$(document).on('submit','#formUser',function(e){
  let originButton=$('#formUser button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formUser button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tableUser.ajax.reload();
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
      $('#formUser button[type="submit"]').html(originButton);
    }
  });
});

$(document).on('change','#formUser #engineer_id',function(e){
  const dataID=$(this).val();
  $.ajax({
    url:base_url + '/engineer/get/'+dataID,
    dataType:'json',
    success:function(data){
      if(typeof(data.data.email) ==='object' ){
        const user=data.data;
        $('#formUser #name').val(user.full_name);
          if(user.email.length > 0 ){
            $('#formUser #email').val(user.email[0].email);
          } else {
            $('#formUser #email').val('');
          }
      }
    }
  })
});

$(document).on('shown.bs.modal','#formUser',function(){

  var $assignment=$('#formUser #engineer_id').select2({
    theme: 'classic',
    allowClear: true,
    ajax:{
      url:$('#assign_to').attr('data-url'),
      dataType:'json',
      method:'POST',
      data:function(params){
        var query={
          search:params.term
        }
        return query;
      },
      processResults:function(data){
        return {
          results:data
        }
      },
      cache:true
  }});

  /*
  var dataUrl=$('#autocomplete_select_reference').attr('data-url');
  $("#autocomplete_select_reference" ).autocomplete({
    autoFocus:true,
    source: function(req,res){
      $.ajax({
        url:dataUrl,
        type:'POST',
        dataType:'json',
        data:{
          term:req.term
        },
        success:function(data){
          res(data)
        }
      });
    },
    minLength:2,
    select:function(event,ui){
      $('#autocomplete_select_reference').val(ui.item.label);
      $('#letter_id_reference').val(ui.item.value);
      $('#ref_subject').val(ui.item.subject);
      return false;
    },
    change:function(ev,ui){
      if(!ui.item){
        $(this).val('');
      }
    }
  })
  .autocomplete('instance')._renderItem = function(ul,item){
    let sliced=item.subject ? item.subject.slice(0,50):'';
    return $('<li>').append('<div>'+item.label+' - '+sliced+'</div>').appendTo(ul);
  } */
});



$(document).on('click','#data-users .assign-form',function(){
  let originButton=$(this).html();
  let buttonID=$(this).attr('data-id');
  $.ajax({
      url:$(this).attr('data-url'),
      type:'GET',
      dataType:'json',
      beforeSend:function(){
          $("button[id='assign-"+buttonID+"']").html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data);
        $('#datamodal').modal('show');
      },error:function(){
          $("button[id='assign-"+buttonID+"']").html(originButton);
      },
      complete:function(){
          $('.modal-body').find('.control-select2').select2({theme:'bootstrap4',allowClear:true});
          $("button[id='assign-"+buttonID+"']").html(originButton);
      }
    });
});

$(document).on('click','#btnCreateFormAssignUser',function(){
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





          /* const attrID=document.querySelectorAll('.text-area');
           for (let i = 0; i < attrID.length; i++) {
            $.fn.createCkeditor(`#${attrID[i].id}`);
          } */
          $('.first-focus').focus();

        },error:function(){
            $('#btnCreate').html(originButton);
        },
        complete:function(){
            $('#btnCreate').html(originButton);
            $('.modal-body').find('.control-select2').select2({theme:'bootstrap4'});
            $('.first-focus').focus();
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
$(document).on('submit','#formAssignUserPackage',function(e){
  let originButton=$('#formAssignUserPackage button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formAssignUserPackage button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tableLetterSource.ajax.reload();
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
      $('#formAssignUserPackage button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#data-assign-package .delete-assign-user',function(){
  let url=$(this).attr('data-url');
  Swal.fire({
      title: 'Are you sure?',
      text: 'You want to delete this data, please ensure...!',
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
                console.log(data);
                  Swal.fire(
                      data.success ? 'success' : 'error',
                      data.message,
                      data.success ? 'success' : 'error'
                      ).then(()=>{
                        tableLetterSource.ajax.reload();
                      })
              }
            });
      }
        return false;
    });
});
$(document).on('submit','#formChangePassword',function(e){
  e.preventDefault();
  $.ajax({
    url:$(this).attr('action'),
    type:$(this).attr('method'),
    data: $(this).serialize(),
    dataType:'json',
    success:function(data){
      Swal.fire(
        'Success',
        data.message,
        data.success ? 'success' :'warning'
      )
    },error:function(a){
      if(a.status==422){
        $.each(a.responseJSON.errors, function (i, v) {
            toastr.error(v)
        })
      } else {
        toastr.error('Error..!');
      }
    }
  })
})


/* end data user */
    var tablePosition = $('#data-position').DataTable({
        processing: true,
        serverSide: true,
        responsive: false,
        scrollY:'500px',
        lengthMenu:[[25,50,-1],[25,50,'All']],
        scrollCollapse:true,
        ajax: $('#data-position').attr('data-url'),
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',searchable:false},
            {data: 'position_code', name: 'position_code'},
            {data: 'position_name', name: 'position_name'},
            {data: 'category', name: 'category',searchable:false},
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

    var tableCorrespondence = $('#data-correspondence-type').DataTable({
      processing: true,
      serverSide: true,
      responsive: false,
      scrollY:'500px',
      lengthMenu:[[25,50,-1],[25,50,'All']],
      scrollCollapse:true,
      ajax: $('#data-correspondence-type').attr('data-url'),
      columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex',searchable:false},
          {data: 'corres_type', name: 'corres_type'},
          {data: 'type', name: 'type'},
          {data: 'content_template', name: 'content_template',searchable:false},
          {data: 'package_name', name: 'package_name',searchable:false},
          {data: 'status', name: 'status',searchable:false},
          {data: 'action', name: 'action', orderable: false, searchable: false},
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
          /* find element */
          $('.modal-body').find('.control-select2').select2({theme:'bootstrap4'});
          CKEDITOR.replace('description');



          /* const attrID=document.querySelectorAll('.text-area');
           for (let i = 0; i < attrID.length; i++) {
            $.fn.createCkeditor(`#${attrID[i].id}`);
          } */
          $('.first-focus').focus();

        },error:function(){
            $('#btnCreate').html(originButton);
        },
        complete:function(){
            $('#btnCreate').html(originButton);
            $('.first-focus').focus();
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


/* letter source */
var tableLetterSource = $('#data-letter-source').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  scrollY:'500px',
  lengthMenu:[[25,50,-1],[25,50,'All']],
  scrollCollapse:true,
  ajax: $('#data-letter-source').attr('data-url'),
  columns: [
      {data: 'DT_RowIndex', name: 'DT_RowIndex',searchable:false},
      {data: 'source_code', name: 'source_code'},
      {data: 'source_name', name: 'source_name'},
      {data: 'package_name', name: 'package_name'},
      {data: 'description', name: 'description',searchable:false},
      {data: 'status', name: 'status',searchable:false},
      {data: 'action', name: 'action', orderable: false, searchable: false},
  ]
});
$(document).on('submit','#formLetterSource',function(e){
  let originButton=$('#formLetterSource button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formLetterSource button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tableLetterSource.ajax.reload();
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
      $('#formLetterSource button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#data-letter-source .edit-form',function(){
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
        const attrID=document.querySelectorAll('.text-area');
        CKEDITOR.replace('description');
       /*  for (let i = 0; i < attrID.length; i++) {
          $.fn.createCkeditor(`#${attrID[i].id}`);
        } */
          $("button[id='edit"+buttonID+"']").html(originButton);
      }
    });
});
$(document).on('click','#data-letter-source .delete',function(){
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
                        tableLetterSource.ajax.reload();
                      })
              }
            });
      }
        return false;
    });
});
/* end letter source */

/* correspondence-type */
$(document).on('submit','#formCorrespondence-type',function(e){
  let originButton=$('#formCorrespondence-type button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formCorrespondence-type button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tableCorrespondence.ajax.reload();
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
      $('#formCorrespondence-type button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#data-correspondence-type .edit-form',function(){
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
        const attrID=document.querySelectorAll('.text-area');
        CKEDITOR.replace('description');
        // for (let i = 0; i < attrID.length; i++) {
        //   $.fn.createCkeditor(`#${attrID[i].id}`);
        // }
          $("button[id='edit"+buttonID+"']").html(originButton);
      }
    });
});
$(document).on('click','#data-correspondence-type .delete',function(){
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
                        tableCorrespondence.ajax.reload();
                      })
              }
            });
      }
        return false;
    });
});
/* end correspondence-type */

/* type of action */
var tableTypeOfAction = $('#data-type-of-action').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  scrollY:'500px',
  lengthMenu:[[25,50,-1],[25,50,'All']],
  scrollCollapse:true,
  ajax: $('#data-type-of-action').attr('data-url'),
  columns: [
      {data: 'DT_RowIndex', name: 'DT_RowIndex',searchable:false},
      {data: 'type_of_action', name: 'type_of_action'},
      {data: 'description', name: 'description'},
      {data: 'package.package_name', name: 'package_name'},
      {data: 'status', name: 'status',searchable:false},
      {data: 'action', name: 'action', orderable: false, searchable: false},
  ]
});
$(document).on('submit','#formTypeOfAction',function(e){
  let originButton=$('#formTypeOfAction button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formTypeOfAction button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tableTypeOfAction.ajax.reload();
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
      $('#formTypeOfAction button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#data-type-of-action .edit-form',function(){
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
$(document).on('click','#data-type-of-action .delete',function(){
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
                        tableTypeOfAction.ajax.reload();
                      })
              }
            });
      }
        return false;
    });
});
/* end type of action */

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
    scrollY:'500px',
    lengthMenu:[[25,50,-1],[25,50,'All']],
    scrollCollapse:true,
    ajax: $('#data-engineer').attr('data-url'),
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'full_name', name: 'full_name'},
        {data: 'nickname', name: 'nickname'},
        {data: 'initial', name: 'initial'},
        {data: 'phone1', name: 'phone1'},
        {data: 'type', name: 'type'},
        {data: 'position_name', name: 'position_name'},
        {data: 'status', name: 'status'},
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
$(document).on('click','#data-engineer .assignment',function(){
  let originButton=$(this).html();
  let buttonID=$(this).attr('data-id');
  $.ajax({
      url:$(this).attr('data-url'),
      type:'GET',
      dataType:'json',
      beforeSend:function(){
          $("button[id='assignment"+buttonID+"']").html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data);
        $('#datamodal').modal('show');
      },error:function(){
          $("button[id='assignment"+buttonID+"']").html(originButton);
      },
      complete:function(){
          $('select[name="position_id"]').select2({theme: 'bootstrap4'});
          $("button[id='assignment"+buttonID+"']").html(originButton);
      }
    });
});
$(document).on('click','#data-engineer .add-email',function(){
  let originButton=$(this).html();
  let buttonID=$(this).attr('data-id');
  $.ajax({
      url:$(this).attr('data-url'),
      type:'GET',
      dataType:'json',
      beforeSend:function(){
          $("button[id='show"+buttonID+"']").html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data);
        $('#datamodal').modal('show');
      },error:function(){
          $("button[id='show"+buttonID+"']").html(originButton);
      },
      complete:function(){
          $("button[id='show"+buttonID+"']").html(originButton);
      }
    });
});
$(document).on('submit','#formAssignEngineer',function(e){
  let originButton=$('#formAssignEngineer button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formAssignEngineer button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tableEngineer.ajax.reload();
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
      $('#formAssignEngineer button[type="submit"]').html(originButton);
    }
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

$(document).on('click','#btnCreateEmail',function(){
  let originButton=$(this).html();
  $.ajax({
      url:$(this).attr('data-url'),
      type:'GET',
      dataType:'json',
      beforeSend:function(){
          $('#btnCreateEmail').html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data);
        $('#datamodal').modal('show');
      },error:function(){
          $('#btnCreateEmail').html(originButton);
      },
      complete:function(){
          $('#btnCreateEmail').html(originButton);
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

$(document).on('submit','#formEmail',function(e){
  let originButton=$('#formEmail button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formEmail button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      const data2=data.data;
      toastr.success(data.message);
      $('#engineerEmail').html('').append(data2);
      // $('#formEmail input[tye').get(0).reset();
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
      $('#formEmail button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#engineerEmail .edit-form',function(){
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
        const attrID=document.querySelectorAll('.text-area');
        for (let i = 0; i < attrID.length; i++) {
          $.fn.createCkeditor(`#${attrID[i].id}`);
        }
          $("button[id='edit"+buttonID+"']").html(originButton);
      }
    });
});
$(document).on('click','#engineerEmail .delete',function(){
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
                        $('#engineerEmail').html('').append(data.data);
                      })
              }
            });
      }
      return false;
    });
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
            CKEDITOR.replace('description');
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
/* letter */
var tableLetter = $('#incoming-letter').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  scrollY:'500px',
  lengthMenu:[[25,50,-1],[25,50,'All']],
  scrollCollapse:true,
  ajax: $('#incoming-letter').attr('data-url'),
  columns: [
    // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
    {data: 'letter_ref_no', name: 'letter_ref_no'},
    {data: 'source_code', name: 'source_name',searchable:false},
    {data: 'letter_date', name: 'letter_date'},
    {data: 'subject', name: 'subject'},
    {data: 'status', name: 'status'},
    {data: 'action', name: 'action', orderable: false, searchable: false}
  ]
});


$(document).on('click','#incoming-letter .delete-data',function(){
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
                            tableLetter.ajax.reload();
                        })
                }
              });
        }
          return false;
      });
  });
/* var tableTransmittal = $('#incoming-transmittal').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  ajax: $('#incoming-transmittal').attr('data-url'),
  columns: [
    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
    {data: 'letter_ref_no', name: 'letter_ref_no'},
    {data: 'letter_date', name: 'letter_date'},
    {data: 'subject', name: 'subject'},
    {data: 'status', name: 'status'},
    {data: 'action', name: 'action', orderable: false, searchable: false}
  ]
}); */

$(document).on('click','#btnAddReference',function(){
  let originButton=$(this).html();
  $.ajax({
      url:$(this).attr('data-url'),
      dataType:'json',
      beforeSend:function(){
          $('#btnAddReference').html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data);
        $('#datamodal').modal('show');
      },error:function(){
          $('#btnAddReference').html(originButton);
      },
      complete:function(){
          $('#btnAddReference').html(originButton);
          $('#formLetterRefference select').select2({theme: 'bootstrap4'});

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
$(document).on('click','#btnAddAttachment',function(){
  let originButton=$(this).html();
  $.ajax({
      url:$(this).attr('data-url'),
      dataType:'json',
      beforeSend:function(){
          $('#btnAddAttachment').html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data);
        $('#datamodal').modal('show');
      },error:function(){
          $('#btnAddAttachment').html(originButton);
      },
      complete:function(){
          $('#btnAddAttachment').html(originButton);
          CKEDITOR.replace('file_names');
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

$(document).ready(function(){
  if(typeof(assignTo)=='string'){
    if(assignTo){
      let assignSelected=JSON.parse(assignTo);
      for (let i = 0; i < assignSelected.length; i++) {
        let newOpt= new Option(assignSelected[i].text,assignSelected[i].id,true,true);
        $assignment.append(newOpt).trigger('change');
      }
    }
  }
  if(typeof(forReferences)=='string'){
    if(forReferences){
      let referenceSelected=JSON.parse(forReferences);
      for (let i = 0; i < referenceSelected.length; i++) {
        let newOptRef= new Option(referenceSelected[i].text,referenceSelected[i].id,true,true);
        $references.append(newOptRef).trigger('change');
      }
    }
  }
})


/* $('#assign_to').select2({theme:'classic',placeholder:'please select data'});
$('#for_reference').select2({theme:'classic',placeholder:'select for reference'}); */


var $assignment=$('#assign_to').select2({
  theme: 'classic',
  allowClear: true,
  ajax:{
    url:$('#assign_to').attr('data-url'),
    dataType:'json',
    method:'POST',
    data:function(params){
      var query={
        search:params.term
      }
      return query;
    },
    processResults:function(data){
      return {
        results:data
      }
    },
    cache:true
}});
var $references=$('#for_reference').select2({
  theme: 'classic',
  allowClear: true,
  ajax:{
    url:$('#for_reference').attr('data-url'),
    dataType:'json',
    method:'POST',
    data:function(params){
      var query={
        search:params.term
      }
      return query;
    },
    processResults:function(data){
      return {
        results:data
      }
    },
    cache:true
}});
var $confirmation=$('#confirmation').select2({
  theme: 'classic',
  allowClear: true,
  ajax:{
    url:$('#confirmation').attr('data-url'),
    dataType:'json',
    method:'POST',
    data:function(params){
      var query={
        search:params.term
      }
      return query;
    },
    processResults:function(data){
      return {
        results:data
      }
    },
    cache:true
}});
$(document).on('select change','#letter_source_id',function(e){
    e.preventDefault();
    let lettersourceid=$(this).val();
    $.ajax({
        url: $(this).attr('data-url')+'/'+lettersourceid,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            $('#correspondence_type').html('').append(data);
            $('#letter_ref_no').val('');
            $('#attention_to').val('');
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
      });

})
$(document).on('select change','#correspondence_type',function(e){
  e.preventDefault();
  $('#letter_ref_no').val('');
  $('#attention_to').val('');
  $.ajax({
    url: $(this).attr('data-url'),
    type: 'POST',
    data: {id:$(this).val(),letter_date:$('#letter_date').val(),from:$('#letter_source_id').val()},
    dataType: 'json',
    success: function (data) {
      $('#letter_ref_no').val(data.ref_no);
      $('#attention_to').val(data.to_attention);
      $('#letter_ref_no').focus();
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
  });
});
$(document).on('submit','#formSubmitLetter',function(e){
  let originButton=$('#formSubmitLetter button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formSubmitLetter button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
        Swal.fire('Success',data.message,data.success ? 'success' :'warning')
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
      $('#formSubmitLetter button[type="submit"]').html(originButton);
    }
  });
})
$(document).on('click','#geneatePDFDistposition',function(e){
  e.preventDefault();
  $.ajax({
    url:$(this).attr('data-url'),
    type:'post',
    dataType:'json',
    success:function(data){
      console.log(data);
    }
  })
});
  $(document).on('shown.bs.modal','#modal-references',function(){
    var dataUrl=$('#autocomplete_select_reference').attr('data-url');
    $("#autocomplete_select_reference" ).autocomplete({
      autoFocus:true,
      source: function(req,res){
        $.ajax({
          url:dataUrl,
          type:'POST',
          dataType:'json',
          data:{
            term:req.term
          },
          success:function(data){
            res(data)
          }
        });
      },
      minLength:2,
      select:function(event,ui){
        $('#autocomplete_select_reference').val(ui.item.label);
        $('#letter_id_reference').val(ui.item.value);
        $('#ref_subject').val(ui.item.subject);
        return false;
      },
      change:function(ev,ui){
        if(!ui.item){
          $(this).val('');
        }
      }
    })
    .autocomplete('instance')._renderItem = function(ul,item){
      let sliced=item.subject ? item.subject.slice(0,50):'';
      return $('<li>').append('<div>'+item.label+' - '+sliced+'</div>').appendTo(ul);
    }
  });
  $(document).on('click','#formLetterRefference button[type="reset"]',function(){
    $('#autocomplete_select_reference').trigger('focus');
  });

  $(document).on('submit','#formLetterRefference',function(e){
    let originButton=$('#formLetterRefference button[type="submit"]').html();
    e.preventDefault();
    $.ajax({
      url: $(this).attr('action'),
      type: $(this).attr('method'),
      data: $(this).serialize(),
      dataType: 'json',
      beforeSend:function(){
        $('#formLetterRefference button[type="submit"]').html(loadingIndicator);
      },success: function (data) {
        data.success ? toastr.success(data.message) : toastr.errors(data.message);
        $('#formLetterRefference button[type="reset"]').trigger('click');
        $('#document-reference').html('').append(data.data);
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
        $('#formLetterRefference button[type="submit"]').html(originButton);
      }
    });
  });
  $(document).on('click','#document-reference .btn-edit-reference',function(e){
    let originButton=$(this).html();
    let buttonID=$(this).attr('data-id');
    $.ajax({
        url:$(this).attr('data-url'),
        type:'GET',
        dataType:'json',
        beforeSend:function(){
            $("button[id='edit_"+buttonID+"']").html(loadingIndicator);
        },
        success:function(data){
          $("#datamodal").html(data);
          $('#datamodal').modal('show');
        },error:function(){
            $("button[id='edit_"+buttonID+"']").html(originButton);
        },
        complete:function(){
            $("button[id='edit_"+buttonID+"']").html(originButton);
        }
      });
  });
  $(document).on('click','#document-reference .btn-delete-reference',function(){
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
                  Swal.fire(data.success ? 'success' : 'error',data.message,data.success ? 'success' : 'error')
                  $('#document-reference').html('').append(data.data);
                }
              });
        }
          return false;
      });
  });
$(document).on('click','.btnCopyAssign',function(){
  $.ajax({
    url:$(this).attr('data-url'),
    type:'GET',
    dataType:'json',
    success:function(data){
      if(data){
        navigator.clipboard.writeText(data);
        toastr.options={
          "positionClass":"toast-top-center",
          "timeOut":"200"
        }
        toastr.info('email action copied..!');
      } else {
        toastr.error('failed to copy email..!');
      }
    }
  })
})

$(document).on('submit','#formAttachment',function(e){
  let originButton=$('#formAttachment button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formAttachment button[type="submit"]').html(loadingIndicator);
    },success: function (data) {
      data.success ? toastr.success(data.message) : toastr.errors(data.message);
      $('#formAttachment button[type="reset"]').trigger('click');
      $('#document-attachment').html('').append(data.data);
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
      $('#formAttachment button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#document-attachment .btn-edit-attachment',function(e){
  let originButton=$(this).html();
  let buttonID=$(this).attr('data-id');
  $.ajax({
      url:$(this).attr('data-url'),
      type:'GET',
      dataType:'json',
      beforeSend:function(){
          $("button[id='edit_"+buttonID+"']").html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data);
        $('#datamodal').modal('show');
      },error:function(){
          $("button[id='edit_"+buttonID+"']").html(originButton);
      },
      complete:function(){
          $("button[id='edit_"+buttonID+"']").html(originButton);
          CKEDITOR.replace('file_name');
          /* const attrID=document.querySelectorAll('.text-area');
          for (let i = 0; i < attrID.length; i++) {
            $.fn.createCkeditor(`#${attrID[i].id}`);
          } */
      }
    });
});
$(document).on('click','#document-attachment .btn-delete-attachment',function(){
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
                Swal.fire(data.success ? 'success' : 'error',data.message,data.success ? 'success' : 'error')
                $('#document-attachment').html('').append(data.data);
              }
            });
      }
        return false;
    });
});


$(document).on('click','#btnCloseLetterSection',function(){
  const dataUrl=$(this).attr('data-url');
  const dataCallback=$(this).attr('data-callback');
  Swal.fire({
      title: 'Are you sure?',
      text: "Do you wanto close this letter ?, please ensure...!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, close it!',
      showConfirmButton:true,
    }).then((isConfirmed) => {
      if (isConfirmed.value) {
        $.ajax({
          url:dataUrl,
          type:'post',
          dataType:'json',
          success:function(data){
            Swal.fire(data.success ? 'success' : 'error',data.message,data.success ? 'success' : 'error').then(function(){
              window.location.href=dataCallback;
            });
          }
        });
      }
      return false;
    });
});
/* end od letter */


/* inspector */
var dataInspector = $('#data-inspector').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  scrollY:'500px',
  lengthMenu:[[25,50,-1],[25,50,'All']],
  scrollCollapse:true,
  ajax: $('#data-inspector').attr('data-url'),
  columns: [
      {data: 'DT_RowIndex', name: 'DT_RowIndex'},
      {data: 'full_name', name: 'full_name'},
      {data: 'nickname', name: 'nickname'},
      {data: 'initial', name: 'initial'},
      {data: 'phone1', name: 'phone1'},
      {data: 'status', name: 'status'},
      {data: 'action', name: 'action', orderable: false, searchable: false},
  ]
});

$(document).on('click','#btnSyncInspector',function(){
  let originButton=$(this).html();
  $.ajax({
      url:$(this).attr('data-url'),
      type:'GET',
      dataType:'json',
      beforeSend:function(){
          $('#btnSyncInspector').html(loadingIndicator);
      },
      success:function(data){
        $("#datamodal").html(data);
        $('#datamodal').modal('show');
      },error:function(){
          $('#btnSyncInspector').html(originButton);
      },
      complete:function(){
          $('#btnSyncInspector').html(originButton);
          $('.first-focus').focus();
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

$(document).on('submit','#formSyncInspector',function(e){
  let originButton=$('#formSyncInspector button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formSyncInspector button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      dataInspector.ajax.reload();
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
      $('#formSyncInspector button[type="submit"]').html(originButton);
    }
  });
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

$('.date-picker-1').datepicker({
  defaultDate:'+1w',
  changeMonth:'true',
  numberOfMoths:1,
  beforeShowDay:$.datepicker.noWeekends,
  minDate:2,
  dateFormat:'d-M-y'
});
$('.date-picker-2').datepicker({
  defaultDate:'+1w',
  changeMonth:'true',
  numberOfMoths:1,
  beforeShowDay:$.datepicker.noWeekends,
  minDate:2,
  dateFormat:'d-M-y'
});
$('.date-picker-3').datepicker({
  defaultDate:'+1w',
  changeMonth:'true',
  numberOfMoths:1,
  beforeShowDay:$.datepicker.noWeekends,
  minDate:2,
  dateFormat:'d MM y'
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


/* $.fn.createCkeditor=function(id=null){
  ClassicEditor.create( document.querySelector( id ),{
    fontFamily: {
      options: [
          'default',
          'Ubuntu, Arial, sans-serif',
          'Ubuntu Mono, Courier New, Courier, monospace'
      ],
      supportAllValues: true
  },
    toolbar: {
        items: [
            'undo', 'redo',
            'bold', 'italic',
            '|', 'heading',
            '|', 'link',
            '|', 'bulletedList', 'numberedList','fontFamily', 'outdent', 'indent'
        ],

        shouldNotGroupWhenFull: false
    }
  } )
  .catch( error => {
      console.error( error );
  } );
} */
/* document type */

var tableDocumentType = $('#data-document-type').DataTable({
  processing: true,
  serverSide: true,
  responsive: false,
  scrollY:'500px',
  lengthMenu:[[25,50,-1],[25,50,'All']],
  scrollCollapse:true,
  ajax: $('#data-document-type').attr('data-url'),
  columns: [
      {data: 'DT_RowIndex', name: 'DT_RowIndex',searchable:false,width:'5%'},
      {data: 'document_type_name', name: 'document_type_name',width:'45%'},
      {data: 'category_id', name: 'category_id',width:'10%'},
      {data: 'package.package_name', name: 'package_name',width:'10%'},
      {data: 'status', name: 'status',searchable:false,width:'10%'},
      {data: 'action', name: 'action', orderable: false, searchable: false,width:'10%'},
  ]
});
$(document).on('submit','#formDocumentType',function(e){
  let originButton=$('#formDocumentType button[type="submit"]').html();
  e.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: $(this).attr('method'),
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend:function(){
      $('#formDocumentType button[type="submit"]').html(loadingIndicator);
    },
    success: function (data) {
      tableDocumentType.ajax.reload();
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
      $('#formTypeOfAction button[type="submit"]').html(originButton);
    }
  });
});
$(document).on('click','#data-document-type .edit-form',function(){
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
        CKEDITOR.replace('description');
        $("button[id='edit"+buttonID+"']").html(originButton);
      }
    });
});
$(document).on('click','#data-document-type .delete',function(){
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
                        tableDocumentType.ajax.reload();
                      })
              }
            });
      }
        return false;
    });
});
/* end document type */

})
