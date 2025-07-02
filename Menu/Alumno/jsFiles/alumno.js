async function showContent(option){

    try {

        const response = await fetch(`${option}.php`);
            
        if (!response.ok)
            throw new Error("Archivo no encontrado");
                
        const html = await response.text();
        document.getElementById("main").innerHTML = html;

    }
    
    catch (error) {
        
        console.error("Error al cargar:", error);
        document.getElementById("main").innerHTML = `<p style="color: red;">Error al cargar </p>`;

    }

}