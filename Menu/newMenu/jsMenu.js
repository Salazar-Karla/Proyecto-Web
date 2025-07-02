
async function showContent(option){

    console.log("Cargando contenido para:", option);

    try {

        if(option === "main"){

            const response = await fetch(`${option}.php`);
                
            if (!response.ok)
                throw new Error("Archivo no encontrado");
                    
            const html = await response.text();
            document.getElementById("main").innerHTML = html;

        }
        else{

            const response = await fetch(`${option}.html`);
            
            if (!response.ok)
                throw new Error("Archivo no encontrado");
                
            const html = await response.text();
            document.getElementById("main").innerHTML = html;

        }

    }
    
    catch (error) {
        
        console.error("Error al cargar:", error);
        document.getElementById("main").innerHTML = `<p style="color: red;">Error al cargar </p>`;

    }

}