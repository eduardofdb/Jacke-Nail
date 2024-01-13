// controladores/Modeloinsumoss.js
import { db } from '../db/database.js';
import Modeloinsumos from '../modelos/Insumos.js'

import multer from 'multer';

const upload = multer({ dest: 'uploads/' });



export const obtenerInsumos = async (req, res) => {
    try {

        const Modeloinsumoss = await Modeloinsumos.find({estadoInsumo:  { $in: [1, 2] }  });
        res.render('insumos/insumos', { Modeloinsumoss });
    } catch (error) {
        res.status(500).json({ error: 'Error al obtener Modeloinsumoss de la base de datos' });
    }
};


export const obtenerInsumosinactivos = async (req, res) => {
    try {

        const Modeloinsumoss = await Modeloinsumos.find({estadoInsumo: 3 });
        res.render('insumos/inactivos', { Modeloinsumoss });
    } catch (error) {
        res.status(500).json({ error: 'Error al obtener Modeloinsumoss de la base de datos' });
    }
};



export const crearInsumos = async (req, res) => {
    try {
        const { insumo, cantidad, estado, categoria } = req.body;
        const imagen = req.file ? req.file.filename : null;

        console.log('Datos del cuerpo de la solicitud:', req.body);
        const nuevoModeloinsumos = new Modeloinsumos({
            nombreInsumo: insumo,
            cantidadInsumo: cantidad,
            estadoInsumo: estado,
            Img: imagen,
            categoria: categoria

        });
        await nuevoModeloinsumos.save();
        res.json({ mensaje: 'Modeloinsumos creado exitosamente' });
    } catch (error) {
        console.error('Error al crear un nuevo Modeloinsumos:', error);
        res.status(500).json({ error: 'Error al crear un nuevo Modeloinsumos' });
    }
};


export const buscaruninsumos = async (req, res) => {
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


export const editarinsumo = async (req, res) => {
    try {

        const { id } = req.params;
        console.log('ID del servicio:', id);

        const buscarinsumos = await Modeloinsumos.findById(id);
        console.log('Datos del servicio:', buscarinsumos);

        if (!buscarinsumos) {
            return res.status(400).json({ error: "Error al obtener el servicio" });
        }

        res.render('insumos/editar', { buscarinsumos });
    } catch (error) {
        console.error("Error al mostrar el formulario de agregar servicios", error);
        res.status(500).json({ error: "Error interno del servidor" });
    }
};


export const eliminarInsumos = async (req, res) => {
    try {
        // Extrae el ID del Modeloinsumos a eliminar del parámetro de la URL
        const { id } = req.params;

        // Busca y elimina el Modeloinsumos por ID
        const resultado = await Modeloinsumos.findByIdAndDelete(id);

        if (!resultado) {
            return res.status(404).json({ error: 'Modelo insumos no encontrado' });
        }
        res.json({ mensaje: 'Modelo insumos eliminado exitosamente' });
    } catch (error) {
        console.error('Error al eliminar el insumos:', error);
        res.status(500).json({ error: 'Error al eliminar el  insumos' });
    }
};


export const actualizarInsumo = async (req, res) => {
    try {
      const { id } = req.params;
      const { nombreInsumo, cantidadInsumo, estadoInsumo, categoria } = req.body;
      const nuevaImagen = req.file;
  
      const insumo = await Modeloinsumos.findById(id);
  
      if (!insumo) {
        return res.status(404).json({ error: 'Insumo no encontrado' });
      }
  
      // Verificar si se proporcionó una nueva imagen
      if (nuevaImagen) {
        // Si hay una nueva imagen, asignarla al insumo
        insumo.Img = nuevaImagen.filename;
      }
  
      insumo.nombreInsumo = nombreInsumo;
      insumo.cantidadInsumo = cantidadInsumo;
      insumo.estadoInsumo = estadoInsumo;
      insumo.categoria = categoria;
  
      await insumo.save();
  
      res.json({ mensaje: 'Insumo actualizado exitosamente' });
    } catch (error) {
      console.error('Error al actualizar el insumo:', error);
      res.status(500).json({ error: 'Error al actualizar el insumo' });
    }
  };
  
export const cambiarEstadoInsumo = async (req, res) => {
    try {
        const idInsumo = req.params.idInsumo;
        const nuevoEstado = req.body.nuevoEstado; 

        // Verificar si el ID del insumo es válido
        if (!idInsumo) {
            return res.status(400).json({ error: 'ID de insumo no válido' });
        }

        // Obtener el insumo por ID
        const insumo = await Modeloinsumos.findById(idInsumo);

        // Verificar si el insumo existe
        if (!insumo) {
            return res.status(404).json({ error: 'Insumo no encontrado' });
        }

        // Verificar si nuevoEstado tiene un valor antes de asignarlo
        if (typeof nuevoEstado !== 'undefined') {
            // Cambiar el estado del insumo
            insumo.estadoInsumo = nuevoEstado;

            // Guardar los cambios en la base de datos
            await insumo.save();

            // Responder con el insumo actualizado
            return res.json(insumo);
        } else {
            return res.status(400).json({ error: 'El nuevo estado no es válido' });
        }
    } catch (error) {
        console.error('Error al cambiar el estado del insumo:', error);
        res.status(500).json({ error: 'Error interno del servidor' });
    }
};




export default { obtenerInsumos,obtenerInsumosinactivos, crearInsumos, buscaruninsumos,editarinsumo, eliminarInsumos ,cambiarEstadoInsumo,actualizarInsumo};
