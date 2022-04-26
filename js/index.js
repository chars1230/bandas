$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'cargar_listas.php',
  })
  .done(function(listas_rep){
    //window.alert("ya estas conectado");
   
    $('#lista_reproduccion').html(listas_rep)
  })
  .fail(function(){
    window.alert('Hubo un error al cargar las listas_rep');
  })

  $('#lista_reproduccion').on('change', function(){
    var id = $('#lista_reproduccion').val()
    $.ajax({
      type: 'POST',
      url: 'cargar_videos.php',
      data: {'id': id},
    })
    .done(function(listas_rep){
      $('#videos').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un error al cargar los vídeos')
    })
  })


  $('#lista_reproduccion').on('change', function(){
    var id = $('#videos').val()
    $.ajax({
      type: 'POST',
      url: 'cargar_url.php',
      data: {'id': id},
    })
    .done(function(listas_rep){
      $('#videos').html(listas_rep)
    })
    .fail(function(){
     // alert('Hubo un error al cargar los url')
    })
  })

       
  $('#lista_reproduccion').on('change', function(){
    var id = $('#lista_reproducion').val()
    $.ajax({
      type: 'POST',
      url: 'logo.php',
      data: {'id': id},
    })
    .done(function(listas_rep){
      $('#logos').html(listas_rep)
    })
    .fail(function(){
      window.alert('Hubo un error al cargar las imagenes')
    })
  })


          /*$('#formulario').submit(function(){
            e.preventDefault();
            var data = $(this).serializeArray();
            $.ajax({
              url: 'index.html',
              type: '$_POST',
              dataType: 'json',
              data: data,
            })
            .done(function(){
              console.log('success');//si es .done
            })
            .fail(function(){
              console.log('Hubo un error')//falso es .fail
            })
          }) */   

 $('#enviar').on('click', function(){
    var resultado = 'Banda elegida : ' + $('#lista_reproduccion option:selected').text() +
    ' <br> Video elegido : ' + $('#videos option:selected').text() +
  
    $('#resultado1').html(resultado)
    
    
  })

 
})
