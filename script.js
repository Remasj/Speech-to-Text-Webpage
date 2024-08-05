document.getElementById('start-recording').addEventListener('click', function() {
    // Check if the browser supports speech recognition
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (!SpeechRecognition) {
        alert('Speech Recognition API is not supported in this browser.');
        return;
    }

    // Initialize SpeechRecognition
    const recognition = new SpeechRecognition();
    recognition.lang = 'en-US'; // Set language
    recognition.interimResults = false; // Only final results

    // Start recording
    recognition.start();

    // Event listener for speech recognition result
    recognition.addEventListener('result', event => {
        const transcript = event.results[0][0].transcript;
        document.getElementById('transcription').textContent = `You said: ${transcript}`;
    });

    // Event listener for speech recognition end
    recognition.addEventListener('end', () => {
        console.log('Speech recognition ended');
    });

    // Event listener for errors
    recognition.addEventListener('error', error => {
        console.error('Speech recognition error:', error);
    });
});
