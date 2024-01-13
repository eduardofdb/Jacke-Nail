// modelos/Servicios.js
import mongoose from 'mongoose';

const servicioSchema = new mongoose.Schema({
    nombreServicio: {
        type: String,
        required: true
    },
    precioServicio: {
        type: Number,
        required: true
    },
    tiempoServicio: {
        type: String,
        required: true
    },
    
    Img: {
        type: String,
        required: true
    },
   
    estadoServicio: {
        type: Number,
        required: true
    },
    
}, { collection: 'servicios' });

const ServicioModel = mongoose.model('servicios', servicioSchema);

export default ServicioModel;
