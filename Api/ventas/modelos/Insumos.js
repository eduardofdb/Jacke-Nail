// modelos/Modeloinsumos.js
import mongoose from 'mongoose';

const insumos = new mongoose.Schema({
  
    nombreInsumo: {
        type: String,
        required: true
    },
    cantidadInsumo: {
        type: Number,
        required: true
    },
    estadoInsumo: {
        type: Number,  
        required: true
    },Img: {
        type: String,
        required: true
    },categoria: {
        type: String,
        required: true
    }
}, { collection: 'insumos' });

const Modeloinsumos = mongoose.model('insumos', insumos);

export default Modeloinsumos;


