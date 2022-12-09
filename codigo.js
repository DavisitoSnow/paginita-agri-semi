$('#registrar').click(function(){
    nom= $('#nombre').val();
    ape=$('#apellido').val();
    cor=$('#correo').val();
    cont=$('contra').val();

    const data = new FormData();
    data.append('nom', nom);
    data.append('ape', ape);
    data.append('cor', cor);
    data.append('cont', cont);

    fetch('codigo.php', {
        method: 'POST',
        bady: data
    })

    .then(function(response){
        return response.text();

    })

    .then(function(respuesta){
        console.log('Esta es la respuesta: '+respuestra );
        alert('Esta es la respuesta: '+respuesta);
    })

    .catch(function(error){
        console.log('Hay un error: '+err);
    });
});