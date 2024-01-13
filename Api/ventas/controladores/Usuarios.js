// controladores/Usuarios.js
import { db } from '../db/database.js';
import Usuario from '../modelos/usuarios.js'
import multer from 'multer';
import path from 'path';

const upload = multer({ dest: 'uploads/' }); 
export const obtenerUsuarios = async (req, res) => {
  try {
    
    const usuarios = await Usuario.find();
    res.render('usuarios/usuarios', { usuarios });
  } catch (error) {
    res.status(500).json({ error: 'Error al obtener usuarios de la base de datos' });
  }
};
export const crearUsuario = async (req, res) => {
  try {
      const { rol, documento, nombre, correo, telefono, estado } = req.body;
      const imagen = req.file ? req.file.filename : null;

      const nuevoUsuario = new Usuario({
          nombre_completo: nombre,
          correo: correo,
          documento: documento,
          telefono: telefono,
          estado: estado,
          rol: rol,
          Img: imagen,
      });

      await nuevoUsuario.save();

      res.json({ mensaje: 'Usuario creado exitosamente' });
  } catch (error) {
      console.error('Error al crear un nuevo usuario:', error);
      res.status(500).json({ error: 'Error al crear un nuevo usuario' });
  }
};

export const actualizarUsuario = async (req, res) => {
  try {
    const { id } = req.params;
    const { nombreCompleto, correo, documento, telefono, estado, rol } = req.body;
    const nuevaImagen = req.file;

    const usuario = await Usuario.findById(id);

    if (!usuario) {
      return res.status(404).json({ error: 'Usuario no encontrado' });
    }

    if (nuevaImagen) {
      // Verifica si el archivo subido es una imagen
      const extensionesImagen = ['.jpg', '.jpeg', '.png', '.gif']; // Puedes agregar más extensiones si es necesario
      const extensionArchivo = path.extname(nuevaImagen.originalname).toLowerCase();

      if (!extensionesImagen.includes(extensionArchivo)) {
        return res.status(400).json({ error: 'El archivo subido no es una imagen válido' });
      }

      // Asigna la nueva imagen al usuario
      usuario.Img = nuevaImagen.filename;
    }

    // Actualiza los campos del usuario
    usuario.nombre_completo = nombreCompleto;
    usuario.correo = correo;
    usuario.documento = documento;
    usuario.telefono = telefono;
    usuario.estado = estado;
    usuario.rol = rol;

    // Guarda los cambios en la base de datos
    await usuario.save();

    res.json({ mensaje: 'Usuario actualizado exitosamente' });
  } catch (error) {
    console.error('Error al actualizar el usuario:', error);
    res.status(500).json({ error: 'Error al actualizar el usuario' });
  }
};

export const eliminarUsuario = async (req, res) => {
  try {
    // Extrae el ID del usuario a eliminar del parámetro de la URL
    const { id } = req.params;

    // Busca y elimina el usuario por ID
    const resultado = await Usuario.findByIdAndDelete(id);

    if (!resultado) {
      return res.status(404).json({ error: 'Usuario no encontrado' });
    }

    res.json({ mensaje: 'Usuario eliminado exitosamente' });
  } catch (error) {
    console.error('Error al eliminar el usuario:', error);
    res.status(500).json({ error: 'Error al eliminar el usuario' });
  }
};

export const buscarunusuario= async (req, res) => {
  try {
      const { id } = req.params;
      const resultado = await Usuario.findById(id);
      if (!resultado) {
          return res.status(400).json({ error: "Error al obtener el usuario" });
      }
      res.json({ servicio: resultado });
  } catch (error) {
      console.log("Error al obtener el usuario", error);
      res.status(500).json({ error: "Error interno del servidor" });
  }
};

export const editarU = async (req, res) => {
  try {
    const { id } = req.params;
    const resultado = await Usuario.findById(id);
    if (!resultado) {
        return res.status(400).json({ error: "Error al obtener el usuario" });
    }
    res.render('usuarios/editar',{resultado});
} catch (error) {
    console.log("Error al obtener el usuario", error);
    res.status(500).json({ error: "Error interno del servidor" });
}
     
}

export const actualizarEstadoUsuario = async (req, res) => {
  try {
    const { id } = req.params;
    const { nuevoEstado } = req.body;

    // Verifica si el nuevo estado es un número válido
    if (typeof nuevoEstado !== 'number') {
      return res.status(400).json({ error: 'El nuevo estado debe ser un número válido' });
    }

    // Actualiza el estado del usuario
    await Usuario.findByIdAndUpdate(id, { estado: nuevoEstado });

    res.json({ mensaje: 'Estado del usuario actualizado exitosamente' });
  } catch (error) {
    console.error('Error al actualizar el estado del usuario:', error);
    res.status(500).json({ error: 'Error interno del servidor' });
  }
};

export const cambiarEstadousuarios = async (req, res) => {
  try {
    const usuariosId = req.params.usuarios;
    const nuevoEstado = req.body.nuevoEstado;

    // Verificar si el ID del usuario es válido
    if (!usuariosId) {
      return res.status(400).json({ error: 'ID de usuario no válido' });
    }

    // Obtener el usuario por ID
    const user = await Usuario.findById(usuariosId);

    // Verificar si el usuario existe
    if (!user) {
      return res.status(404).json({ error: 'Usuario no encontrado' });
    }

    // Verificar si nuevoEstado tiene un valor antes de asignarlo
    if (typeof nuevoEstado !== 'undefined') {
      // Cambiar el estado del usuario
      user.estado = nuevoEstado;

      // Guardar los cambios en la base de datos
      await user.save();

      // Responder con el usuario actualizado
      return res.json(user);
    } else {
      return res.status(400).json({ error: 'El nuevo estado no es válido' });
    }
  } catch (error) {
    console.error('Error al cambiar el estado del usuario:', error);
    res.status(500).json({ error: 'Error interno del servidor' });
  }
};

export default {obtenerUsuarios,crearUsuario,actualizarUsuario,eliminarUsuario,buscarunusuario,actualizarEstadoUsuario,editarU,cambiarEstadousuarios};
