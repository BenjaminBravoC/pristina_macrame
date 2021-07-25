

const cargarTipos = async()=>{
    let filtroTipo = document.querySelector("#filtro-tipo");
    let tipos = await getTipos();

    tipos.forEach(t=>{
        let option = document.createElement("option");
        option.innerText = t;
        option.value = t;
        filtroTipo.appendChild(option);
    });

};

const iniciarEliminacion = async function(){
    let id = this.idContacto;
    let resp = await Swal.fire({
        title: "¿Estás seguro que desea eliminar el contacto?",
        text: "Esta operación es irreversible",
        icon: "error",
        showCancelButton: true
    });
    if(resp.isConfirmed){
        if(await eliminarContacto(id)){
            let contactos = await getContactos();
            cargarTabla(contactos);
            Swal.fire("Contacto eliminado", "El contacto ha sido eliminado con éxito","info");
        }else{
            Swal.fire("Error", "No se pudo procesador la solicitud de eliminación", "error");
        }
    }else{
        Swal.fire("Cancelado", "Usted ha cancelado la eliminación");
    }
};



const cargarTabla = (contactos)=>{
    let tbody = document.querySelector("#tbody-contacto");

    tbody.innerHTML = "";

    for(let i=0; i < contactos.length; ++i){
        let tr = document.createElement("tr");

        let tdNombre = document.createElement("td");
        tdNombre.innerText = contactos[i].nombre;

        let tdRut = document.createElement("td");
        tdRut.innerText = contactos[i].rut;

        let tdTipo = document.createElement("td");
        tdTipo.innerText = contactos[i].tipo;

        let tdTelefono = document.createElement("td");
        tdTelefono.innerText = contactos[i].telefono;

        let tdDireccion = document.createElement("td");
        tdDireccion.innerHTML = contactos[i].direccion;

        let tdAccion = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger","text-center");
        botonEliminar.idContacto = contactos[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAccion.appendChild(botonEliminar);

        tr.appendChild(tdNombre);
        tr.appendChild(tdTipo);
        tr.appendChild(tdTelefono);
        tr.appendChild(tdDireccion);
        tr.appendChild(tdAccion);

        tbody.appendChild(tr);
    }
};

document.querySelector("#filtro-tipo").addEventListener("change", async()=>{
    let filtro = document.querySelector("#filtro-tipo").value;
    let contactos = await getContactos(filtro);
    cargarTabla(contactos);
});


document.addEventListener("DOMContentLoaded", async()=>{
    await cargarTipos();
    let contactos = await getContactos();
    cargarTabla(contactos);
});