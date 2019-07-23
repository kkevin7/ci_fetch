window.addEventListener('load', listener);
url="http://localhost/ci_fetch/ensayo/cancion/";

function listener(){
    recargar_tbody();
    document.getElementById('btn-add').addEventListener('click', post);
    document.getElementById('btn-edit').addEventListener('click', post);
    document.getElementById('btn-cancel').addEventListener('click', limpiar);
}

function recargar_tbody(){
    fetch(url+'tbody')
    .then(res => {return res.text()})
    .then(response => {
        document.getElementById('tbody-content').innerHTML = response;
        let btnDelete = document.getElementsByClassName('btn-delete');
        let btnMostrar = document.getElementsByClassName('btn-mostrar');
        for(i=0; i<btnDelete.length; i++){
            btnDelete[i].addEventListener('click', eliminar);
            btnMostrar[i].addEventListener('click', mostrar)
        }
    });
}

function post(e){
    e.preventDefault();
    let form = document.getElementById('form-cancion');
    let datos = new FormData(form);
    let view = "";
    if (this.value == "agregar") {
        view="create"
    }
    if(this.value == "editar"){
        view= "update"
    }
    fetch(url+view,{
        method: 'POST',
        body: datos
    })
    .then(
         res => {
            recargar_tbody();
            limpiar()}
    );
}

function limpiar(){
    document.getElementById('form-cancion').reset();
    document.getElementById('div-estado').style = "display: none";
    document.getElementById('btn-add').style = "display: inline-block";
    document.getElementById('btn-edit').style = "display: none";
}

function eliminar(){
    let id = this.value;
    if(confirm('Deseas Eliminar el registro')){
        fetch(url+'delete/'+id)
        .then( res => {
            recargar_tbody(); 
        })
    }else{
        return false;
    }
}

function mostrar(e){
    e.preventDefault();
    let id = this.value;
    fetch(url+'findById/'+id)
    .then(res => { return res.json()})
    .then(response =>{
        document.getElementsByName('id')[0].value = response.id;
        document.getElementsByName('titulo')[0].value = response.titulo;
        document.getElementsByName('autor')[0].value = response.autor;
        document.getElementsByName('duracion')[0].value = response.duracion;

        document.getElementById('div-estado').style = "display: block";
        document.getElementsByName('estado')[0].value = response.estado;
        document.getElementById('btn-add').style = "display: none";
        document.getElementById('btn-edit').style = "display: inline-block";

    }
    )
}