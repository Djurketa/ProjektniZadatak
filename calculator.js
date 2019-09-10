
function getParams(event) { 
    // Clicked element
    var element = event.target;
    // Checking that the 'td' tag is clicked
    if (element.id=='data'){
    // Converting data string to array and filtering numbers only
  	var data = element.innerText.split(' ').filter( item =>  parseInt(item) == item );
    // Creating params for request
  	var params = {
            'factor1' : data[0],
            'factor2' : data[1],
            'operation' : '*'
    }
  	 // Sending params to php script and getting response
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'class/calculator.class.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify(params));
    xhr.onreadystatechange = function () {
	     if (xhr.readyState === 4 && xhr.status === 200) {
	         // Geting response
           response = xhr.responseText;
           // Adding responce message inside div element
           var pop_up = document.querySelector('.pop-up')
           pop_up.style.display = 'flex';
           document.querySelector('.message').innerText=response;
           // Event listener - on click to close pop-up message
           pop_up.addEventListener('click', () =>{
               pop_up.style.display = 'none';
           })         
	     }
  	 }
   }
}

