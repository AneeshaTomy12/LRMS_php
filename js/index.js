// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
// function forgot1(){

//     swal({
        
//         title: 'Reset Password',
//         showCloseButton: true,
//         closeButtonClass: 'btn btn-danger',
//         // input: 'email',
//         // inputPlaceholder: "Email Please",
//         // input: 'text',
//         // inputPlaceholder: "Enter your answer",

//         html: `<hr><input type="text" id="login" class="swal2-input" placeholder="Email please">
//         <span>Your security question:</span><p id="quest"></p>
//         <input type="text" id="text" class="swal2-input" placeholder="Enter your answer"><hr>`,
//         confirmButtonText: 'Submit',
//         focusConfirm: false,
//         preConfirm: () => {
//         //   const login = Swal.getPopup().querySelector('#login').value
//         //   const text = Swal.getPopup().querySelector('#text').value
//           const login = document.getElementById('login').value
//           const text =document.getElementById('text').value
//           if (!login || !text) {
//             Swal.showValidationMessage(`Please enter login and password`)
//           }
//           return { login: login, password: password }
//         }
//       }).then((result) => {
//         Swal(`
//           Login: ${result.value.login}
//           Password: ${result.value.password}
//         `.trim())
//       })
      
// }