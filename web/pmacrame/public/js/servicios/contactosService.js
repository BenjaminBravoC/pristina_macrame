
//Operaciones típicas para comunicarse con el controlador
const getContactos = async(filtro = "todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/contactos/get");
    }else{
        resp = await axios.get(`api/contactos/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};

//crearContacto
const crearContacto = async(contacto)=>{
    let resp = await axios.post("api/contactos/post", contacto, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};

const eliminarContacto = async(id)=>{
    try{
        let resp = await axios.post("api/contactos/delete", {id},{
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};