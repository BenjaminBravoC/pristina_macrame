
const getMateriales = async(filtro = "todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/materiales/get");
    }else{
        resp = await axios.get(`api/materiales/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};


const crearMaterial = async(material)=>{
    let resp = await axios.post("api/materiales/post", material, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};

const eliminarMaterial = async(id)=>{
    try{
        let resp = await axios.post("api/materiales/delete", {id},{
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};