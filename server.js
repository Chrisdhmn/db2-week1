const express = require('express'); 
const bodyParser = require('body-parser'); 
const { Client } = require('pg'); 
const cors = require('cors'); 
const app = express(); 
const PORT = 3001; 
app.use(cors()); 
app.use(bodyParser.json()); 
app.post('/login', async (req, res) => { 
    const { username, password } = req.body; 
    console.log('Received credentials:', { username, password }); 
    const client = new Client({ 
        host: 'localhost', 
        port: 5432, 
        user: username, 
        password: password, 
        database: 'oracle' // Change to your database name if needed 
    }); 
    try { 
        await client.connect(); 
        await client.end(); 
        res.json({ success: true, message: 'Login successful!' }); 
    } catch (err) { 
        res.status(401).json({ success: false, message: 'Login failed: ' + err.message }); 
    } 
}); 
app.listen(PORT, () => { 
    console.log(`Server running on http://localhost:${PORT}`); 
}); 