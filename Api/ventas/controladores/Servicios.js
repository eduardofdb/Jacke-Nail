import { json } from 'express';
import {db} from '../db/database.js';
import ServicioModel from '../modelos/Servicios.js';

import multer from 'multer';
import path from 'path';

const upload = multer({ dest: 'uploads/' }); 


export const obtenerServicios = async (req, res) => {
    try {
        const Servicios = await ServicioModel.find({ estadoServicio: 1 });
        res.render('servicios/Servicios', { Servicios });
    } catch (error) {
        res.status(400).json({ error: "Error al encontrar los servicios activos" });
    }
}


export const obtenerServiciosin = async (req, res) => {
    try {
        const Servicios = await ServicioModel.find({ estadoServicio: 2 });
        res.render('servicios/inactivos', { Servicios });
    } catch (error) {
        res.status(400).json({ error: "Error al encontrar los servicios activos" });
    }
}

 export const agregar = async (req, res) => {
    try {
       
        res.render('servicios/agregarservicios');
    } catch (error) {
        console.error("Error al mostrar el formulario de agregar servicios", error);
        res.status(500).json({ error: "Error interno del servidor" });
    }
};

export const editar = async (req, res) => {
    try {

            const { id } = req.params;
            console.log('ID del servicio:', id);

            const buscarServicio = await ServicioModel.findById(id);
            console.log('Datos del servicio:', buscarServicio);

            if (!buscarServicio) {
                return res.status(400).json({ error: "Error al obtener el servicio" });
            }
       
        res.render('servicios/editarservicios',{buscarServicio});
    } catch (error) {
        console.error("Error al mostrar el formulario de agregar servicios", error);
        res.status(500).json({ error: "Error interno del servidor" });
    }
};
export const crearServicios = async (req, res) => {
    try {
      const { nombreServicio, precioServicio, tiempoServicio,estadoServicio} = req.body;

      const imagen = req.file ? req.file.filename : null;
            
      const NuevoServicio = new ServicioModel({
        nombreServicio,
        precioServicio,
        tiempoServicio,
         Img: imagen,
        estadoServicio
      });
  
      await NuevoServicio.save();
  
      res.json({ mensaje: 'Servicio creado exitosamente' });
    } catch (error) {
      console.error('Error al registrar un servicio', error);
      res.status(500).json({ error: 'Error al registrar un servicio' });
    }
};



// controladores/Servicios.js
export const buscarunServicio = async (req, res) => {
    try {
        const { id } = req.params;
        const buscarServicio = await ServicioModel.findById(id);
        if (!buscarServicio) {
            return res.status(400).json({ error: "Error al obtener el servicio" });
        }
        res.json({ servicio: buscarServicio });
    } catch (error) {
        console.log("Error al obtener el servicio", error);
        res.status(500).json({ error: "Error interno del servidor" });
    }
};

export const actualizarServicio = async (req, res) => {
    try {
        const { id } = req.params;
        const servicioExistente = await ServicioModel.findById(id);

        if (!servicioExistente) {
            return res.status(404).json({ error: 'Servicio no encontrado' });
        }

        const { nombreServicio, precioServicio, tiempoServicio, estadoServicio } = req.body;

        // Verifica si se proporcionó un nuevo archivo de imagen
        const nuevaImagen = req.file ? req.file.filename : null;

        // Actualiza los campos del servicio con los nuevos valores
        servicioExistente.nombreServicio = nombreServicio;
        servicioExistente.precioServicio = precioServicio;
        servicioExistente.tiempoServicio = tiempoServicio;
        servicioExistente.estadoServicio = estadoServicio;

        // Si se proporcionó una nueva imagen, actualiza el campo Img
        if (nuevaImagen) {
            servicioExistente.Img = nuevaImagen;
        }

        await servicioExistente.save();

        res.json({ mensaje: 'Servicio actualizado exitosamente' });
    } catch (error) {
        console.error('Error al actualizar el servicio', error);
        res.status(500).json({ error: 'Error al actualizar el servicio' });
    }
};



export const EliminarServicios = async (req,res)=>{
    try{
        const {id}= req.params;
        const resultados= await ServicioModel.findByIdAndDelete(id);
        if(!resultados){
            return res.status(400).json({
                error:"Error al eliminar el servicios"
            })
        }
        res.json({mensaje:"insumo eliminado correctamente"});
    }catch (error){
        console.error("error al eliminar el servicio ");
        res.status(500).json({error:"error al eliminar el servicio "})
    }
}


export const cambiarEstadoServicio = async (req, res) => {
    try {
      const servicioId = req.params.servicio;
      const nuevoEstado = req.body.nuevoEstado;
  
      // Verificar si el ID del servicio es válido
      if (!servicioId) {
        return res.status(400).json({ error: 'ID de servicio no válido' });
      }
  
      // Obtener el servicio por ID
      const servicio = await ServicioModel.findById(servicioId);
  
      // Verificar si el servicio existe
      if (!servicio) {
        return res.status(404).json({ error: 'Servicio no encontrado' });
      }
  
      // Verificar si nuevoEstado tiene un valor antes de asignarlo
      if (typeof nuevoEstado !== 'undefined') {
        // Cambiar el estado del servicio
        servicio.estadoServicio = nuevoEstado;
  
        // Guardar los cambios en la base de datos
        await servicio.save();
  
        // Responder con el servicio actualizado
        return res.json(servicio);
      } else {
        return res.status(400).json({ error: 'El nuevo estado no es válido' });
      }
    } catch (error) {
      console.error('Error al cambiar el estado del servicio:', error);
      res.status(500).json({ error: 'Error interno del servidor' });
    }
  };
  

 export default {obtenerServiciosin,buscarunServicio,obtenerServicios,crearServicios,EliminarServicios,agregar,editar,actualizarServicio,cambiarEstadoServicio};