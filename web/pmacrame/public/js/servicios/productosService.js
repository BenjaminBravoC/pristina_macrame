//Operaciones típicas para comunicarse con el controlador
//getProductos
const getProductos = async()=>{
    let resp = await axios.get("api/productos/get");
    return resp.data;
};

//crearProducto
const crearProducto = async(producto)=>{
    let resp = await axios.post("api/productos/post", producto, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};