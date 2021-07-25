
tinymce.init({
    selector: '#direccion-txt',
    height: 200,
    menubar: false,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

const cargarTipos = async()=>{
    let tipos = await getTipos();
    let tiposSelect = document.querySelector("#tipo-select");

    tipos.forEach(t=>{
        let option = document.createElement("option");
        option.innerText = t;
        tiposSelect.appendChild(option);
    });


};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarTipos();
});


document.querySelector("#registrar-btn").addEventListener("click", async()=>{
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let tipo = document.querySelector("#tipo-select").value;
    let telefono = document.querySelector("#telefono-txt").value;
    let direccion = tinymce.get("direccion-txt").getContent();


    let errores = [];

    if(nombre === ""){
        errores.push("Debe ingresar un nombre");
    }else{
        let contactos = await getContactos();
        let contactoEncontrado = contactos.find(c=>c.nombre.toLowerCase() === nombre.toLowerCase());
        if(contactoEncontrado != undefined){
            errores.push("El contacto ya existe");
        }
    }

    if(telefono === ""){
        errores.push("Debe ingresar un teléfono de contacto");
    }

    if(direccion === ""){
        errores.push("Debe ingresar una dirección");
    }

    if(errores.length == 0){
        let contacto = {};
        contacto.nombre = nombre;
        contacto.tipo = tipo;
        contacto.telefono = telefono;
        contacto.direccion = direccion;

        let res = await crearContacto(contacto);

        await Swal.fire("Contacto ingresado", "Operación realizada con éxito","success");

        window.location.href = "ver_contactos";
    }else{
        Swal.fire({
            title: "Errores de validación",
            icon: "warning",
            html: errores.join("<br />")
        });
    }
});