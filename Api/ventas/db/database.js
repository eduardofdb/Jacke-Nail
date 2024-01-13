// db/database.js
import mongoose from 'mongoose';

const dbUrl = 'mongodb+srv://1151435351:1151435351@sena.1lnzqhb.mongodb.net/jacke_nail?retryWrites=true&w=majority';

mongoose.connect(dbUrl, { useNewUrlParser: true, useUnifiedTopology: true });

const db = mongoose.connection;

db.on('error', console.error.bind(console, 'Error de conexión:'));
db.once('open', () => {
  console.log('Conexión exitosa a MongoDB Atlas');
});

export { db };
