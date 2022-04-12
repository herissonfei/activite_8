document.querySelector('#button').addEventListener('click', logMessages)

function logDebug() {
    logMessages()
}

function logMessages() {
    console.log('Message');
    console.warn('Attention!');
    console.error('ERREUR');
}