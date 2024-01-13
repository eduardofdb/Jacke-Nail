// controladores/Ventas.js
import { db } from '../db/database.js';
import Venta from '../modelos/ventas.js'
import Modeloinsumos from '../modelos/Insumos.js'
import ServicioModel from '../modelos/Servicios.js';
import Usuario from '../modelos/usuarios.js';



export const AgregarVentas = async (req, res) => {
  try {

    const Modeloinsumoss = await Modeloinsumos.find({ estadoInsumo: { $in: [1, 2] } });
    const Servicios = await ServicioModel.find({estadoServicio:1});
    const Empleado = await Usuario.find({ rol: 2, estado: 1 });

    const Cliente = await Usuario.find({ rol: 3, estado: 1 });
   
    res.render('Ventas/registrar', { Modeloinsumoss,Servicios,Empleado,Cliente });
  } catch (error) {
    res.status(500).json({ error: 'Error al obtener Modeloinsumoss de la base de datos' });
  }
};

export const obtenerVentas = async (req, res) => {
  try {
    console.log('Antes de la consulta');
    const ventas = await Venta.find({})
      .populate({
        path: 'Empleados',
        model: Usuario,
        match: { rol: { $in: [2] } },
        select: 'nombre_completo correo documento telefono estado rol Img',
      })
      .populate({
        path: 'Clientes',
        model: Usuario,
        match: { rol: { $in: [3] } },
        select: 'nombre_completo correo documento telefono estado rol Img',
      })
      .populate({
        path: 'idServicio' ,
        model: ServicioModel,
        select: 'idServicio nombreServicio precioServicio tiempoServicio Img estadoServicio'})
      .populate({
        path: 'detallesInsumos.idInsumo',
        model: Modeloinsumos,
        select: 'nombreInsumo cantidadInsumo estadoInsumo Img categoria',
      });

    console.log('Después de la consulta');
    res.render('Ventas/Listar', { ventas });
  } catch (error) {
    console.error('Error al obtener ventas:', error);
    res.status(500).json({ error: 'Error al obtener ventas de la base de datos' });
  }
};

export const CrearVenta = async (req, res) => {
  try {
    // Obtener datos de la solicitud
    const { empleadoId, clienteId, servicioId, precioVenta, adiciones, detallesInsumos,fecha } = req.body;

    const nuevaVenta = new Venta({
      Empleados: empleadoId,
      Clientes: clienteId,
      idServicio: servicioId,
      precioVenta,
      adiciones,
      fecha: fecha,
      detallesInsumos,
    });

    // Guardar la venta en la base de datos
    const ventaGuardada = await nuevaVenta.save();

    res.status(201).json(ventaGuardada);
  } catch (error) {
    console.error(error);
    res.status(500).json({ error: 'Error al agregar la venta' });
  }
};

export const actualizaVenta = async (req, res) => {
  try {
    // Extrae el ID del venta y los datos a actualizar del cuerpo de la solicitud
    const { id } = req.params;
    const {
      Empleados,
      Clientes,
      idServicio,
      precioVenta,
      adiciones,
      fecha,
      detallesInsumos
    } = req.body;

    // Busca el venta por ID
    const ventaActualizada = await Venta.findByIdAndUpdate(
      id,
      {
        Empleados,
        Clientes,
        idServicio,
        precioVenta,
        adiciones,
        fecha,
        detallesInsumos
      },
      { new: true }
    );

    if (!ventaActualizada) {
      return res.status(404).json({ error: 'Venta no encontrada' });
    }

    res.json({ mensaje: 'Venta actualizada exitosamente', venta: ventaActualizada });
  } catch (error) {
    console.error('Error al actualizar la venta:', error);
    res.status(500).json({ error: 'Error al actualizar la venta' });
  }
};

export const obtenerunaventa = async (req, res) => {
  try {

    const { id } = req.params;
    const buscarventa = await Venta.findById(id);
    if (!buscarventa) {
      return res.status(400).json({ error: "La venta no se a encontrado" });
    }
    res.json({ Venta: buscarventa })
  } catch (error) {
    console.log("error al obtener la venta", error);
  }
}


export const eliminarVenta = async (req, res) => {
  try {
    // Extrae el ID de la venta a eliminar del parámetro de la URL
    const { id } = req.params;

    // Busca y elimina la venta por ID
    const resultado = await Venta.findByIdAndDelete(id);

    if (!resultado) {
      return res.status(404).json({ error: 'Venta no encontrada' });
    }

    res.json({ mensaje: 'Venta eliminada exitosamente' });
  } catch (error) {
    console.error('Error al eliminar la venta:', error);
    res.status(500).json({ error: 'Error al eliminar la venta' });
  }
};

export const buscaruninsumosV = async (req, res) => {
  try {
      const { id } = req.params;
      const buscaruninsumos = await Modeloinsumos.findById(id);
      if (!buscaruninsumos) {
          return res.status(400).json({ error: "insumos no encontrado" })
      }
      res.json({ ventas: buscaruninsumos })
  } catch (error) {
      console.log("Error al obtener los insumos", error)
  }
}


export const actualizarCantidadInsumo = async (req, res) => {
  const { idInsumo } = req.params; // Obtener el ID del insumo de los parámetros de la URL
  const { cantidadInsumo } = req.body; // Obtener la nueva cantidad del cuerpo de la solicitud

  try {
      // Buscar el insumo por su ID
      const insumo = await Modeloinsumos.findById(idInsumo);

      // Verificar si el insumo existe
      if (!insumo) {
          return res.status(404).json({ mensaje: 'Insumo no encontrado' });
      }

      // Actualizar la cantidad del insumo
      insumo.cantidadInsumo = cantidadInsumo;

      // Guardar el insumo actualizado en la base de datos
      const insumoActualizado = await insumo.save();

      // Responder con el insumo actualizado
      res.status(200).json(insumoActualizado);
  } catch (error) {
      console.error(error);
      res.status(500).json({ error: 'Error al actualizar la cantidad del insumo' });
  }
};

//----------------------------------------------------- de aqui hacia abajo  estan las consultas de las colecciones para asociar insumos ventas servicios empleados clientes ----


export default { obtenerVentas,CrearVenta, actualizaVenta, obtenerunaventa, eliminarVenta, AgregarVentas,buscaruninsumosV,actualizarCantidadInsumo  };
