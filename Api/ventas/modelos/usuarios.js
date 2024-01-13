// modelos/Usuario.js
import mongoose from 'mongoose';

const usuarios = new mongoose.Schema({
  nombre_completo: {
    type: String,
    required: true
  },
  correo: {
    type: String,
    required: true
  },
  documento: {
    type: String,
    required: true
  },
  telefono: {
    type: String,
    required: true
  },
  estado: {
    type: Number, 
    required: true
  },
  rol: {
    type: Number,
    required: true
  }, Img: {
    type: String,
    required: true
},
}, { collection: 'usuarios' });



const Usuario = mongoose.model('usuarios', usuarios);

export default Usuario;
