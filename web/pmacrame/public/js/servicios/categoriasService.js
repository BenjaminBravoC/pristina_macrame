
const getCategorias = async()=>{
    let resultado = await axios.get("api/categorias/get");
    return resultado.data;
};