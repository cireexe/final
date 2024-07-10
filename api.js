let contenedorPersonajes = document.getElementById("personajes")

fetch("https://rickandmortyapi.com/api/character")
.then((response)=>response.json())
.then((datos)=>{

    console.log(datos)
    console.log(datos.results)

    datos.results.forEach((elementos) => {
        

        const contenedorCreado = document.createElement('div')

        contenedorCreado.innerHTML = `
            <h4>${elementos.name}</h4>
           <img style="width:200px; border-radius:10px;" src="${elementos.image}">                
            `;


       contenedorPersonajes.append(contenedorCreado)


    });

})