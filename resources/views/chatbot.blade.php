<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <style>
        /* Add some basic styling */
        .chat-container { width: 300px; margin: 0 auto; }
        .messages { border: 1px solid #ccc; padding: 10px; height: 400px; overflow-y: scroll; }
        .input { margin-top: 10px; }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="messages" id="messages"></div>
        <div class="input">
            <input type="text" id="messageInput" placeholder="Type a message">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
    <script>
        async function sendMessage() {
            const input = document.getElementById('messageInput');
            const message = input.value;
            const messages = document.getElementById('messages');

            messages.innerHTML += `<div>User: ${message}</div>`;

            const response = await fetch('/chatbot', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ message }),
            });

            const data = await response.json();
            messages.innerHTML += `<div>Bot: ${data.response}</div>`;

            input.value = '';
            messages.scrollTop = messages.scrollHeight;
        }
    </script>
</body>
</html>