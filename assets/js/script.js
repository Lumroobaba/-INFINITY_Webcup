const input = document.querySelector('textarea');
const send = document.querySelector('.button');
const chatContainer = document.querySelector('.form');

send.onclick = () => {
    if(input.value){
         bot();
    }
 }

// when click enter
input.addEventListener("keypress", function(e) {
    if (e.key === "Enter") {
    e.preventDefault();
    send.click();
    }
});

// bot response
function bot() {
    var http = new XMLHttpRequest();
    var data = new FormData();
    var inputText = input.value.charAt(0).toLowerCase() + input.value.slice(1); // convert first letter to lowercase
    data.append('prompt', inputText);
    http.open('POST', 'request.php', true);
    http.send(data);
    // setTimeout(() => {
    // // preloader here
    // chatContainer.innerHTML += `
    //             <div class="message response">
    //                 <div>
    //                     <img src="img/loading-dots.gif" alt="preloader">
    //                 </div>
    //             </div>
    //         `;
    // scrollDown();
    // }, 1000);
    http.onload = () => {
    // process response here
    // var response = JSON.parse(http.response);
    // var replyText = processResponse(response.choices[0].message.content);
    // var replyContainer = document.querySelectorAll('.response');
    // replyContainer[replyContainer.length - 1].querySelector('div').innerHTML = replyText;
    console.log(http.response);
    };
}

function processResponse(res){
    var arr = res.split(':')
    return arr[arr.length-1]
        .replace(/(\r\n|\r|\n)/gm, '')
        .trim()
}