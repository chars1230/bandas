
let $lista_reproduccion = document.querySelectorAll('$lista_reproduccion');
let $video = document.querySelector('.lis');
$lista_reproduccion.forEach(listaVideo =>{
    video.oneclick = () =>{
        lisVideo.forEach(vid => vid.classList.remove('$video'));
        video.classList.add('$video');
        if(video.classList.contains('onclick')){
            iframe =  iframe.getAtteibute(' $video ');
            
            mainVideo.chaildren[1].innerHTML;
            title.innerHTML;
        };
    };
});

function process(){
    var lista = $('#lista').val();
    $.post('recibe.php',{lista:'lista_reproduccion'},function(data){
        if(data!= null){
            alert('datos enviador correctamente')
        }else{
            alert('los datos no pudieron ser enviados')
    }
    });
}
