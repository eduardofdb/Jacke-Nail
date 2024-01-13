import mongoose from 'mongoose';



const ventaSchema = new mongoose.Schema({
  Empleados: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'Usuario',
    required: true
  },
  Clientes: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'Usuario', 
    required: true
  },
  idServicio: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'ServicioModel', 
    required: true
  },
  precioVenta: {
    type: Number,
    required: true
  },
  adiciones: {
    type: Number,
    required: true
  },
  fecha: {
    type: Date,
    required: true
  },
  detallesInsumos: [{
    idInsumo: {
      type: mongoose.Schema.Types.ObjectId,
      ref: 'Modeloinsumos', 
      required: true
    },
    cantidad: {
      type: Number,
      required: true
    }
  }],
}, { collection: 'ventas' });

const Venta = mongoose.model('ventas', ventaSchema);

export default Venta;
