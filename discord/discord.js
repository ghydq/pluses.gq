const path = require('path');
const express = require('express');


const app = express();

app.use('',express.static(path.join(__dirname, 'discord')));

app.get('/', (request, response) => {
	return response.sendFile('discord.html', { root: './discord' });
});

app.get('/auth/discord', (request, response) => {
	return response.sendFile('dashboard.html', { root: './discord' });
});

const port = '53134';
app.listen(port, () => console.log(`App listening at https://pluses.gq:${port}`));