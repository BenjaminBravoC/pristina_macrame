//Operaciones típicas para comunicarse con el controlador
//getProductos
const getProductos = async(filtro = "todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/productos/get");
    }else{
        resp = await axios.get(`api/productos/filtrar?filtro=${filtro}`);
    }
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

const eliminarProducto = async(id)=>{
    try{
        let resp = await axios.post("api/productos/delete", {id},{
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};