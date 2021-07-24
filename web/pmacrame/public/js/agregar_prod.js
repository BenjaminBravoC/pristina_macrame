
document.querySelector("#registrar-btn").addEventListener("click", async()=>{
    let nombre = document.querySelector("#nombre-txt").value;
    let categoria = document.querySelector("#categoria-select").value;
    let precio = document.querySelector("#precio-txt").value;
    let descripcion = tinymce.get("descripcion-txt").getContent();

    let producto = {};
    producto.nombre = nombre;
    producto.categoria = categoria;
    producto.precio = precio;
    producto.descripcion = descripcion;

    let res = await crearProducto(producto);

    await Swal.fire("Producto ingresado", "Operación realizada con éxito","success");

    window.location.href = "ver_productos";
});