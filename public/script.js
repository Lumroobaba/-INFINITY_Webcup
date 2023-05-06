const input = document.querySelector('input');
const send = document.querySelector('button');
const chatContainer = document.querySelector('.chats');

send.onclick = () => {
    if(input.value){
         const message = `
             <div class="message">
                 <div>
                     ${input.value}
                 </div>
             </div>
         `
         chatContainer.innerHTML += message
         scrollDown();
         bot();
         input.value = null
    }
 }

// when click enter
input.addEventListener("keypress", function(e) {
    if (e.key === "Enter") {
    e.preventDefault();
    send.click();
    }
});

// scroll down when new message added
function scrollDown() {
    chatContainer.scrollTop = chatContainer.scrollHeight;
}

// bot response
function bot() {
    var http = new XMLHttpRequest();
    var data = new FormData();
    var inputText = input.value.charAt(0).toLowerCase() + input.value.slice(1); // convert first letter to lowercase
    data.append('prompt', inputText);
    http.open('POST', 'request.php', true);
    http.send(data);
    setTimeout(() => {
    // preloader here
    chatContainer.innerHTML += `
                <div class="message response">
                    <div>
                        <img src="assets/img/loading-dots.gif" alt="preloader">
                    </div>
                </div>
            `;
    scrollDown();
    }, 1000);
    http.onload = () => {
        // process response here
        var response = JSON.parse(http.response);
        var replyText = response.choices[0].message.content;
        var replyContainer = document.querySelectorAll('.response');
        replyContainer[replyContainer.length - 1].querySelector('div').innerHTML = replyText;
        scrollDown();
    };
}