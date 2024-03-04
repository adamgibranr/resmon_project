const express = require('express');

const app = express();
const port = 3000;

app.get('/', (req, res) => {

    function myScript() {
        const { execSync } = require('child_process');
    
        const cpuInfo = execSync('python system_monitoring.py cpu').toString();
        const memoryInfo = execSync('python system_monitoring.py memory').toString();
    
        console.log('CPU Info:', cpuInfo);
        console.log('Memory Info:', memoryInfo);

        res.send('CPU Info:', cpuInfo);
        res.send('Memory Info:', memoryInfo);
    
    }

    setInterval(myScript, 10000);
});

app.listen(port, () => {
    console.log(`Server is listening at http://localhost:${port}`);
});

// const express = require('express');
// const { exec } = require('child_process');

// const app = express();
// const port = 3000;

// app.get('/', (req, res) => {
//     exec('python system_monitoring.py cpu', (error, stdout, stderr) => {
//         if (error) {
//             console.error(`Error executing command: ${error}`);
//             return;
//         }
//         console.log(`CPU Info: ${stdout}`);
//         res.send(`CPU Info: ${stdout}`);
//     });
// });

// app.listen(port, () => {
//     console.log(`Server is listening at http://localhost:${port}`);
// });