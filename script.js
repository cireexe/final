document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
  
    if (email === "" || password === "") {
        Swal.fire({
            title: 'Error',
            text: 'Por favor, completa todos los campos.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    } else {
        Swal.fire({
            title: 'Éxito',
            text: 'Iniciaste sesión correctamente.',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    }
  });