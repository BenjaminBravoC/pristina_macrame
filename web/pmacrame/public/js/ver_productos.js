
const cargarCategorias = async()=>{
    let filtroCtg = document.querySelector("#filtro-ctg");
    let categorias = await getCategorias();

    categorias.forEach(c=>{
        let option = document.createElement("option");
        option.innerText = c;
        option.value = c;
        filtroCtg.appendChild(option);
    });

};

const iniciarEliminacion = async function(){
    let id = this.idProducto;
    let resp = await Swal.fire({
        title: "¿Estás seguro que desea eliminar el producto?",
        text: "Esta operación es irreversible",
        icon: "error",
        showCancelButton: true
    });
    if(resp.isConfirmed){
        if(await eliminarProducto(id)){
            let productos = await getProductos();
            cargarTabla(productos);
            Swal.fire("Producto eliminado", "El producto ha sido eliminado con éxito","info");
        }else{
            Swal.fire("Error", "No se pudo procesador la solicitud de eliminación", "error");
        }
    }else{
        Swal.fire("Cancelado", "Usted ha cancelado la eliminación");
    }
};



const cargarTabla = (productos)=>{
    let tbody = document.querySelector("#tbody-producto");

    tbody.innerHTML = "";

    for(let i=0; i < productos.length; ++i){
        let tr = document.createElement("tr");

        let tdNro = document.createElement("td");
        tdNro.innerText = (i+1);

        let tdNombre = document.createElement("td");
        tdNombre.innerText = productos[i].nombre;

        let tdCategoria = document.createElement("td");
        tdCategoria.innerText = productos[i].categoria;

        let tdPrecio = document.createElement("td");
        tdPrecio.innerText = productos[i].precio;

        let tdDescripcion = document.createElement("td");
        tdDescripcion.innerHTML = productos[i].descripcion;

        let tdAccion = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger","text-center");
        botonEliminar.idProducto = productos[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAccion.appendChild(botonEliminar);

        tr.appendChild(tdNro);
        tr.appendChild(tdNombre);
        tr.appendChild(tdCategoria);
        tr.appendChild(tdPrecio);
        tr.appendChild(tdDescripcion);
        tr.appendChild(tdAccion);

        tbody.appendChild(tr);
    }
};

document.querySelector("#filtro-ctg").addEventListener("change", async()=>{
    let filtro = document.querySelector("#filtro-ctg").value;
    let productos = await getProductos(filtro);
    cargarTabla(productos);
});


document.addEventListener("DOMContentLoaded", async()=>{
    await cargarCategorias();
    let productos = await getProductos();
    cargarTabla(productos);
});