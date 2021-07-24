tinymce.init({
    selector: '#descripcion-txt',
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

const cargarCategorias = async()=>{
    let categorias = await getCategorias();
    let categoriaSelect = document.querySelector("#categoria-select");

    categorias.forEach(c=>{
        let option = document.createElement("option");
        option.innerText = c;
        categoriaSelect.appendChild(option);
    });


};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarCategorias();
});