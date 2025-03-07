/* // captcha.js

function generateCaptcha() {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let captchaLength = 6;
    let captcha = '';
  
    for (let i = 0; i < captchaLength; i++) {
      captcha += characters.charAt(Math.floor(Math.random() * characters.length));
    }
  
    // Display the generated CAPTCHA 
    const captchaContainer = document.getElementById('captcha');
    captchaContainer.textContent = captcha;
  
    // Store the CAPTCHA value (you'll need to handle this securely in your application)
    // For example, you could store it in a hidden input field:
    const captchaInput = document.getElementById('captchaInput'); 
    captchaInput.value = captcha; 
  }
  
  // Call the function to generate the initial CAPTCHA
  generateCaptcha(); 
  
  // (Optional) Add an event listener to regenerate the CAPTCHA on button click
  const refreshButton = document.getElementById('refreshButton');
  if (refreshButton) {
    refreshButton.addEventListener('click', generateCaptcha);
  } */

    function generateMathCaptcha() {
        const canvas = document.getElementById('captchaCanvas');
        const ctx = canvas.getContext('2d');
    
        // Clear the canvas
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    
        // Generate random numbers and operator
        const operators = ['+', '-'];
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        const operator = operators[Math.floor(Math.random() * operators.length)];
    
        // Calculate the correct answer
        let captchaAnswer;
        if (operator === '+') {
            captchaAnswer = num1 + num2;
        } else if (operator === '-') {
            captchaAnswer = num1 - num2;
        }
    
        // Create the CAPTCHA question
        const captchaQuestion = `${num1} ${operator} ${num2} = ?`;
    
        // Create a gradient for the background
        const gradient = ctx.createLinearGradient(0, 0, canvas.width, 0);
        gradient.addColorStop(0, 'rgba(255, 0, 0, 0.1)');
        gradient.addColorStop(0.5, 'rgba(0, 255, 0, 0.1)');
        gradient.addColorStop(1, 'rgba(0, 0, 255, 0.1)');
        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, canvas.width, canvas.height);
    
        // Add some noise to the background
        for (let i = 0; i < 100; i++) {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.1)';
            ctx.fillRect(Math.random() * canvas.width, Math.random() * canvas.height, 3, 3);
        }
    
        // Set font and style
        ctx.font = '20px Arial';
        ctx.fillStyle = 'black';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
    
        // Draw the CAPTCHA text
        ctx.fillText(captchaQuestion, canvas.width / 2, canvas.height / 2);
    
        // Store the CAPTCHA answer in the hidden input field
        const captchaInput = document.getElementById('captchaInput');
        captchaInput.value = captchaAnswer;
    }
    
    // Call the function to generate the initial CAPTCHA
    generateMathCaptcha();
    
    // Add event listener to refresh button
    document.getElementById('refresh-captcha').addEventListener('click', (event) => {
        event.preventDefault(); // Prevent form submission and page refresh
        generateMathCaptcha();
    });
    