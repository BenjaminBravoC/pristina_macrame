
const cargarTipo = async()=>{
    let filtroTipo = document.querySelector("#filtro-tipo");
    let tipo = await getTipo();

    tipo.forEach(t=>{
        let option = document.createElement("option");
        option.innerText = t;
        filtroTipo.appendChild(option);
    });

};

const iniciarEliminacion = async function(){
    let id = this.idMaterial;
    let resp = await Swal.fire({
        title: "¿Estás seguro que desea eliminar el material?",
        text: "Esta operación es irreversible",
        icon: "error",
        showCancelButton: true
    });
    if(resp.isConfirmed){
        if(await eliminarMaterial(id)){
            let materiales = await getMateriales();
            cargarTabla(materiales);
            Swal.fire("Material eliminado", "El material ha sido eliminado con éxito","info");
        }else{
            Swal.fire("Error", "No se pudo procesador la solicitud de eliminación", "error");
        }
    }else{
        Swal.fire("Cancelado", "Usted ha cancelado la eliminación");
    }
};



const cargarTabla = (materiales)=>{
    let tbody = document.querySelector("#tbody-material");

    tbody.innerHTML = "";

    for(let i=0; i < materiales.length; ++i){
        let tr = document.createElement("tr");

        let tdContacto = document.createElement("td");
        tdContacto.innerText = materiales[i].contacto;

        let tdProducto = document.createElement("td");
        tdProducto.innerText = materiales[i].producto;

        let tdNombre = document.createElement("td");
        tdNombre.innerText = materiales[i].nombre;

        let tdTipo = document.createElement("td");
        tdTipo.innerText = materiales[i].tipo;

        let tdCantidad = document.createElement("td");
        tdCantidad.innerText = materiales[i].cantidad;

        let tdPrecio = document.createElement("td");
        tdPrecio.innerText = "$ " + materiales[i].precio;

        let tdAccion = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger","text-center");
        botonEliminar.idMaterial = materiales[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAccion.appendChild(botonEliminar);

        tr.appendChild(tdNombre);
        tr.appendChild(tdTipo);
        tr.appendChild(tdContacto);
        tr.appendChild(tdProducto);
        tr.appendChild(tdCantidad);
        tr.appendChild(tdPrecio);
        tr.appendChild(tdAccion);

        tbody.appendChild(tr);
    }
};

document.querySelector("#filtro-tipo").addEventListener("change", async()=>{
    let filtro = document.querySelector("#filtro-tipo").value;
    let materiales = await getMateriales(filtro);
    cargarTabla(materiales);
});


document.addEventListener("DOMContentLoaded", async()=>{
    await cargarTipo();
    let materiales = await getMateriales();
    cargarTabla(materiales);
});