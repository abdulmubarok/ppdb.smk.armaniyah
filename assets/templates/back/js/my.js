pesan = $('.flash').data('pesan');
tipe = $('.flash').data('tipe');
//Notify
if (pesan) {
   $.notify({
       icon: 'flaticon-alarm-1',
       title: pesan,
       message: '',
   },{
       type: tipe,
       placement: {
           from: "top",
           align: "right"
       },
       time: 5000,
   }); 
   
}


$('.tombolHapus').on('click', function(e) {
    e.preventDefault();
    href = $(this).attr('href');
    swal({
        title: '',
        text: "Yakin akan menghapus data ini?",
        type: 'warning',
        buttons:{
            confirm: {
                text : 'Hapus !',
                className : 'btn btn-success'
            },
            cancel: {
                visible: true,
                className: 'btn btn-danger'
            }
        }
    }).then((Delete) => {
        if (Delete) {
            document.location.href=href;
        } else {
            swal.close();
        }
    });


});


