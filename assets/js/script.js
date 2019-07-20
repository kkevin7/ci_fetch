window.addEventListener('load', listener);
var id;

function listener() {
    recargar();
    mostrarAdd();
}

function recargar() {
    let tbody = document.getElementById('tbody-content');
    fetchRequest('cancion/recargar').then(
        datos => {
            tbody.innerHTML = datos;
            let btnEdit = document.querySelectorAll('.btn-mostrar');
            let btnDelete = document.querySelectorAll('.btn-delete');

            for (let i = 0; i < btnDelete.length; i++) {
                btnDelete[i].addEventListener('click', eliminar);
                btnEdit[i].addEventListener('click', mostrarEdit);
            }
        }
    )
}

async function mostrarAdd(){
    return await fetchRequest('cancion/mostrarAdd').then(
        respuesta => {
            document.getElementById('formulario').innerHTML = respuesta;
            document.getElementById('btn-add').addEventListener('click', post);
        }
    );
}

function post(e) {
    e.preventDefault();
    console.log(this.event);
    let formulario = document.getElementById('formulario');
    var formData = new FormData(formulario);

    if (formData.get('titulo') == "" || formData.get('autor') == "" || formData.get('duracion') == "") {
        alert("LOS CAMPOS ESTAN VACIOS")
        return false;
    } else {
        postRequest('cancion/create', formData).then(respuesta => {
            recargar();
            limpiar();
        }
        );
    }
}

function eliminar(e) {
    e.preventDefault();
    id = this.value;

    if(confirm('¿Deseas eliminar el registro?')){
        fetchRequest('cancion/delete/' + id).then(
            respuesta => {
                recargar();
            }
        );
    }else{
        return false;
    }
}

async function mostrarEdit(){
    id = this.value;
    return await fetchRequest('cancion/mostrarEdit/'+id).then(
        respuesta => {
            document.getElementById('formulario').innerHTML = respuesta;
            document.getElementById('btn-edit').addEventListener('click', editar);
            document.getElementById('btn-reset').addEventListener('click', limpiar);
        }
    );
}

function editar(e) {
    e.preventDefault();
    let formulario = document.getElementById('formulario');
    var formData = new FormData(formulario);
    formData.append('id', id);

    if (formData.get('titulo') == "" || formData.get('autor') == "" || formData.get('duracion') == "") {
        alert("LOS CAMPOS ESTAN VACIOS")
        return false;
    } else {
        postRequest('cancion/update', formData).then(respuesta => {
            recargar();
            limpiar();
        }
        );
    }
}

function limpiar() {
    mostrarAdd();
    document.getElementById('formulario').reset();
}

async function fetchRequest(url) {
    return await fetch(url)
        .then(response => response.text())
        .then(text => { return text });
}

async function postRequest(url, datos) {
    return await fetch(url, {
        method: 'POST',
        body: datos
    }).then(res => res.text())
    .catch(error => console.error('Error:', error))
    .then(response => console.log('Correcto:', response));
}