import express from 'express';
import { format } from 'date-fns';
import pdfMake from 'pdfmake/build/pdfmake.js';
import pdfFonts from 'pdfmake/build/vfs_fonts.js';
import base64Img from 'base64-img';
import Usuario from '../modelos/usuarios.js';
import   ServicioModel from  '../modelos/Servicios.js';
import ExcelJS from 'exceljs';
pdfMake.vfs = pdfFonts.pdfMake.vfs;
const rutas = express.Router();


rutas.get('/reporte-excel', async (req, res) => {
  try {
    // Obtener datos de la base de datos (reemplaza esto con tu lógica)
    const data = await Usuario.find();

    // Crear un nuevo libro de Excel y una hoja
    const workbook = new ExcelJS.Workbook();
    const worksheet = workbook.addWorksheet('Usuarios');

    // Definir las columnas de la hoja de cálculo
    worksheet.columns = [
      { header: 'Nombre', key: 'nombre_completo', width: 20 },
      { header: 'Correo', key: 'correo', width: 30 },
      { header: 'Documento', key: 'documento', width: 15 },
      { header: 'Teléfono', key: 'telefono', width: 15 },
      { header: 'Estado', key: 'estado', width: 15 },
      { header: 'Rol', key: 'rol', width: 20 },
    ];

    // Agregar datos a la hoja de cálculo
    data.forEach((record) => {
      worksheet.addRow({
        nombre_completo: record.nombre_completo || 'Sin nombre',
        correo: record.correo || 'Sin correo',
        documento: record.documento || 'Sin documento',
        telefono: record.telefono || 'Desconocido',
        estado: record.estado === 1 ? 'Activo' : 'Inactivo',
        rol: record.rol === 1 ? 'Administrador' : record.rol === 2 ? 'Empleado' : 'Cliente',
      });
    });

    // Configurar la respuesta HTTP con el tipo de contenido adecuado
    res.setHeader('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    res.setHeader('Content-Disposition', 'attachment; filename=ReporteUsuarios.xlsx');

    // Enviar el libro de Excel como respuesta
    await workbook.xlsx.write(res);
    res.end();
  } catch (error) {
    console.error('Error en la generación del informe Excel:', error);
    res.status(500).json({ error: 'Error interno del servidor' });
  }
});



rutas.get('/reporte', async (req, res) => {
  try {
    const data = await Usuario.find();
    const formattedData = data.map(record => ({
      nombre: record.nombre_completo || 'Sin nombre',
      correo: record.correo || 'Sin correo',
      documento: record.documento || 'Sin documento',
      telefono: record.telefono || 'Desconocido',
      estado: record.estado === 1 ? 'Activo' : 'Inactivo',
      rol: record.rol === 1 ? 'Administrador' : record.rol === 2 ? 'Empleado' : 'Cliente',
      Img: record.Img || 'Sin imagen',
    }));

    const fechaGeneracion = format(new Date(), 'yyyy-MM-dd HH:mm:ss');
    const logoPath = 'public/images/Jacke.png';

    const logoBase64 = base64Img.base64Sync(logoPath);

    const content = {

      content: [
        {
          image: logoBase64,
          width: 100,  // Ajusta el ancho según sea necesario
          alignment: 'left',  // Alinea la imagen a la izquierda
          margin: [10, 10, 0, 10],  // Márgenes: arriba, derecha, abajo, izquierda
        },
        { text: 'Reporte de Usuarios', style: 'header' },
        { text: 'Se generó un reporte con la información de todos los usuarios registrados.', fontSize: 12, alignment: 'left', margin: [0, 0, 0, 20] },
        {
          table: {
            headerRows: 1,
            widths: ['auto', 'auto', 'auto', 'auto', 'auto', 'auto'],
            body: [
              ['Nombre', 'Correo', 'Documento', 'Teléfono', 'Estado', 'Rol'],
              ...formattedData.map(record => [
                record.nombre,
                record.correo,
                record.documento,
                record.telefono,
                record.estado,
                record.rol,
              ]),
            ],
          },
        },
        {
          text: 'Fecha y hora de la generación del reporte: ' + fechaGeneracion,
          fontSize: 10,
          alignment: 'right',
          margin: [0, 20, 10, 0],
        },
      ],
      footer: {
        columns: [
          { text: 'Dirección: Cll 82A Nro 22A-31', alignment: 'center' },
          { text: 'Teléfono: 3104568456', alignment: 'center' },
          { text: 'Correo: JackeNail@gmail.com', alignment: 'center' },
        ],
      },
      styles: {
        header: {
          fontSize: 16,
          bold: true,
          alignment: 'center',
          margin: [0, 0, 0, 10],
          color: 'red',
        },
      },
    };
    
  const pdfDoc = pdfMake.createPdf(content);

  pdfDoc.getBuffer(async (buffer) => {
    try {
      res.setHeader('Content-Type', 'application/pdf');
      res.setHeader('Content-Disposition', 'inline; filename="reporteventa.pdf"');
      res.end(buffer);
    } catch (error) {
      console.error('Error al enviar la respuesta HTTP:', error);
      res.status(500).json({ error: 'Error interno del servidor' });
    }
  });
} catch (error) {
  console.error('Error en la generación del PDF:', error);
  res.status(500).json({ error: 'Error interno del servidor' });
}
});




rutas.get('/reporteServiciospdf', async (req, res) => {
    try {
      const data = await ServicioModel.find({ estadoServicio: 1 });
      const formattedData = data.map(record => ({
        NOMBRE_SERVICIO: record.nombreServicio || 'Sin NOMBRE_SERVICIO',
        TIEMPO: record.tiempoServicio || 'Sin TIEMPO',
        PRECIO: record.precioServicio || 'Sin PRECIO',
        Estado: record.estadoServicio === 1 ? 'Activo' : 'Inactivo', // Asigna etiquetas más descriptivas para el estado
      }));
      const fechaGeneracion = format(new Date(), 'yyyy-MM-dd HH:mm:ss');
      const logoPath = 'public/images/Jacke.png';
      const logoBase64 = base64Img.base64Sync(logoPath);
  
      const content = {
        content: [
          {
            image: logoBase64,
            width: 100,
            alignment: 'left',
            margin: [10, 10, 0, 10],
          },
          { text: 'Reporte de Servicios', style: 'header' },
          { text: 'Se generó un reporte con la información de todos los servicios activos.', fontSize: 12, alignment: 'left', margin: [0, 0, 0, 20] },
          {
            table: {
              headerRows: 1,
              widths: ['auto', 'auto', 'auto', 'auto'],
              body: [
                ['NOMBRE_SERVICIO', 'TIEMPO', 'PRECIO', 'Estado'],
                ...formattedData.map(record => [
                  record.NOMBRE_SERVICIO,
                  record.TIEMPO,
                  record.PRECIO,
                  record.Estado,
                ]),
              ],
            },
          },
          {
            text: 'Fecha y hora de la generación del reporte: ' + fechaGeneracion,
            fontSize: 10,
            alignment: 'right',
            margin: [0, 20, 10, 0],
          },
        ],
        footer: {
          columns: [
            { text: 'Dirección: Cll 82A Nro 22A-31', alignment: 'center' },
            { text: 'Teléfono: 3104568456', alignment: 'center' },
            { text: 'Correo: JackeNail@gmail.com', alignment: 'center' },
          ],
        },
        styles: {
          header: {
            fontSize: 16,
            bold: true,
            alignment: 'center',
            margin: [0, 0, 0, 10],
            color: 'red',
          },
        },
      };
  
      const pdfDoc = pdfMake.createPdf(content);
  
      pdfDoc.getBuffer(async (buffer) => {
        try {
          res.setHeader('Content-Type', 'application/pdf');
          res.setHeader('Content-Disposition', 'inline; filename="reporteServicios.pdf"');
          res.end(buffer);
        } catch (error) {
          console.error('Error al enviar la respuesta HTTP:', error);
          res.status(500).json({ error: 'Error interno del servidor' });
        }
      });
    } catch (error) {
      console.error('Error en la generación del PDF:', error);
      res.status(500).json({ error: 'Error interno del servidor' });
    }
  });


  rutas.get('/reporte-excel-servicios', async (req, res) => {
    try {
      // Obtener datos de la base de datos
      const data = await ServicioModel.find();
  
      // Crear un nuevo libro de Excel y una hoja
      const workbook = new ExcelJS.Workbook();
      const worksheet = workbook.addWorksheet('Servicios');
  
      // Definir las columnas de la hoja de cálculo
      worksheet.columns = [
        { header: 'Nombre del Servicio', key: 'nombreServicio', width: 20 },
        { header: 'Precio del Servicio', key: 'precioServicio', width: 15 },
        { header: 'Tiempo del Servicio', key: 'tiempoServicio', width: 20 },
        { header: 'Imagen', key: 'Img', width: 30 },
        { header: 'Estado del Servicio', key: 'estadoServicio', width: 15 },
      ];
  
      // Agregar datos a la hoja de cálculo
      data.forEach((record) => {
        worksheet.addRow({
          nombreServicio: record.nombreServicio || 'Sin nombre',
          precioServicio: record.precioServicio || 'Sin precio',
          tiempoServicio: record.tiempoServicio || 'Sin tiempo',
          Img: record.Img || 'Sin imagen',
          estadoServicio: record.estadoServicio === 1 ? 'Activo' : 'Inactivo',
        });
      });
  
      // Configurar la respuesta HTTP con el tipo de contenido adecuado
      res.setHeader('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      res.setHeader('Content-Disposition', 'attachment; filename=ReporteServicios.xlsx');
  
      // Enviar el libro de Excel como respuesta
      await workbook.xlsx.write(res);
      res.end();
    } catch (error) {
      console.error('Error en la generación del informe Excel de servicios:', error);
      res.status(500).json({ error: 'Error interno del servidor' });
    }
  });
export default rutas;
