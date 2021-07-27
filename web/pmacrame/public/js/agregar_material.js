
const cargarProductos = async()=>{
    let productos = await getProductos();
    let productoSelect = document.querySelector("#producto-select");
    productos.forEach(p=>{
        let option = document.createElement("option");
        option.innerText = p.nombre;
        productoSelect.appendChild(option);
    });
};

const cargarContactos = async()=>{
    let contactos = await getContactos();
    let contactoSelect = document.querySelector("#contacto-select");
    contactos.forEach(c=>{
        let option = document.createElement("option");
        option.innerText = c.nombre;
        contactoSelect.appendChild(option);
    });
};

const cargarTipo = async()=>{
    let tipo = await getTipo();
    let tipoSelect = document.querySelector("#tipo-select");

    tipo.forEach(t=>{
        let option = document.createElement("option");
        option.innerText = t;
        tipoSelect.appendChild(option);
    });
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarProductos();
    cargarContactos();
    cargarTipo();
});

document.querySelector("#registrar-btn").addEventListener("click", async()=>{
    let contacto = document.querySelector("#contacto-select").value.trim();
    let producto = document.querySelector("#producto-select").value.trim();
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let tipo = document.querySelector("#tipo-select").value.trim();
    let cantidad = document.querySelector("#cantidad-txt").value.trim();
    let precio = document.querySelector("#precio-txt").value.trim();


    let errores = [];

    if(nombre === ""){
        errores.push("Debe ingresar un nombre");
    }else{
        let materiales = await getMateriales();
        let materialEncontrado = materiales.find(m=>m.nombre.toLowerCase() === nombre.toLowerCase());
        if(materialEncontrado != undefined){
            errores.push("El material ya existe");
        }
    }

    if(cantidad === ""){
        errores.push("Debe ingresar una cantidad");
    }

    if(precio === ""){
        errores.push("Debe ingresar un precio");
    }

    if(errores.length == 0){
        let material = {};
        material.contacto = contacto;
        material.producto = producto;
        material.nombre = nombre;
        material.tipo = tipo;
        material.cantidad = cantidad;
        material.precio = precio;

        let res = await crearMaterial(material);

        await Swal.fire("Material ingresado", "Operación realizada con éxito","success");

        window.location.href = "ver_materiales";
    }else{
        Swal.fire({
            title: "Errores de validación",
            icon: "warning",
            html: errores.join("<br />")
        });
    }
});