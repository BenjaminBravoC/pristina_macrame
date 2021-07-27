
const getTipos = async()=>{
    let resultado = await axios.get("api/tipos/get");
    return resultado.data;
};

const getTipo = async()=>{
    let resultado = await axios.get("api/tipo/get");
    return resultado.data;
};