document.getElementById('translateEnglish').addEventListener('click', async () => {
    const targetLanguage = 'En'; // 'am' is the language code for Amharic
    try {
        // Translate all paragraphs and headings within the element with id "textToTranslate"
        const textToTranslate = document.getElementById('textToTranslate');
        const elementsToTranslate = textToTranslate.querySelectorAll('p,h1,h2,h3,h4,h5');

        for (const element of elementsToTranslate) {
            const response = await fetch('http://localhost:3000/translate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ text: element.innerText.trim(), targetLanguage }),
            });

            const data = await response.json();
            // Replace the content of each element with the translated text
            element.innerText = data.translation;
        }
    } catch (error) {
        console.error('Error:', error);
    }
});

document.getElementById('translateAmharic').addEventListener('click', async () => {
    const targetLanguage = 'am'; // 'am' is the language code for Amharic

    try {
        // Translate all paragraphs and headings within the element with id "textToTranslate"
        const textToTranslate = document.getElementById('textToTranslate');
        const elementsToTranslate = textToTranslate.querySelectorAll('p,h1,h2,h3,h4,h5');

        for (const element of elementsToTranslate) {
            const response = await fetch('http://localhost:3000/translate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ text: element.innerText.trim(), targetLanguage }),
            });

            const data = await response.json();
            // Replace the content of each element with the translated text
            element.innerText = data.translation;
        }
    } catch (error) {
        console.error('Error:', error);
    }
});