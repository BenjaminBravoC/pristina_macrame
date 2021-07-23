
const cargarTabla = (productos)=>{
    let tbody = document.querySelector("#tbody-producto");

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
        botonEliminar.innerText = "Borrar";
        botonEliminar.classList.add("btn","btn-danger","text-center");
        botonEliminar.idProducto = productos[i].id;
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


document.addEventListener("DOMContentLoaded", async()=>{
    let productos = await getProductos();
    cargarTabla(productos);
});