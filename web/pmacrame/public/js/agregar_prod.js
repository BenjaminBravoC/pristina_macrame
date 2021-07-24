
document.querySelector("#registrar-btn").addEventListener("click", async()=>{
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let categoria = document.querySelector("#categoria-select").value;
    let precio = document.querySelector("#precio-txt").value;
    let descripcion = tinymce.get("descripcion-txt").getContent();


    let errores = [];

    if(nombre === ""){
        errores.push("Debe ingresar un nombre");
    }else{
        //Si el producto existe
        let productos = await getProductos();
        let productoEncontrado = productos.find(p=>p.nombre.toLowerCase() === nombre.toLowerCase());
        if(productoEncontrado != undefined){
            errores.push("El producto ya existe");
        }
    }


    if(precio === ""){
        errores.push("Debe ingresar un precio correcto");
    }

    if(descripcion === ""){
        errores.push("Debe ingresar una descripción");
    }

    if(errores.length == 0){
        let producto = {};
        producto.nombre = nombre;
        producto.categoria = categoria;
        producto.precio = precio;
        producto.descripcion = descripcion;

        let res = await crearProducto(producto);

        await Swal.fire("Producto ingresado", "Operación realizada con éxito","success");

        window.location.href = "ver_productos";
    }else{
        Swal.fire({
            title: "Errores de validación",
            icon: "warning",
            html: errores.join("<br />")
        });
    }
});