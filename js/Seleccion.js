function seleccion(seleccion,nombreSelec, precioUn){
    /* 
    "SI NO EXISTE LA VARIABLE DE localStorage seleccion"
    REALIZAREMOS LO SIGUIENTE
    */
    if (!localStorage.getItem(seleccion)) {
        //CREAMOS LA VARIABLE DE LOCALSTORAGE
        cantidadSum = { cantidad: 0, seleccion: nombreSelec, precio: precioUn, key: seleccion} ;
        localStorage.setItem(seleccion, JSON.stringify(cantidadSum));
        /*
        OBTENEMOS LA VARIABLE seleccion con getItem() 
        ES UN OBJETO POR LO QUE TENEMOS QUE PARSEARLA
        */
        let dataStorage = JSON.parse(localStorage.getItem(seleccion));
        //MODIFICAMOS SOLO LA cantidad
        dataStorage.cantidad = dataStorage.cantidad + 1;
        //SOBREESCRIBIMOS LA VARIABLE de localStorage
        localStorage.setItem(seleccion, JSON.stringify(dataStorage));
    } else {
        let dataStorage = JSON.parse(localStorage.getItem(seleccion));
        dataStorage.cantidad = dataStorage.cantidad + 1;
        dataStorage.precio = precioUn * dataStorage.cantidad;  
        localStorage.setItem(seleccion, JSON.stringify(dataStorage));
    } 
      
}
function seleccionMenos(seleccion){
    // EN ESTA FUNCION SE RESTA EL VALOR DE cantidad - 1 EN EL KEY DE seleccion 
    let dataStorage = JSON.parse(localStorage.getItem(seleccion));
    // SI cantidad - 1 ES DIFERENTE DE 0 SE LE RESTA - 1 A CANTIDAD
    var precioUn = dataStorage.precio / dataStorage.cantidad;
    if (dataStorage.cantidad - 1 != 0){
        dataStorage.cantidad = dataStorage.cantidad - 1;
        dataStorage.precio = precioUn * dataStorage.cantidad;
        localStorage.setItem(seleccion, JSON.stringify(dataStorage));
    }
    // SI NO EL KEY seleccion DEL LOCALSTORAGE SE ELIMINA DEL LOCALSTORAGE Y DE LA PANTALLA DE COBRO 
    else{
        localStorage.removeItem(seleccion);
    }      
}

function documentWrite(){
    for (var i = 0; i <= 6; i++){ 
        var x = JSON.parse(localStorage.getItem("HXNMBR"+i));
        if (x != null){
            var values = ("" + Object.values(x)).replace(',' ,' - ');
            var seleccion = "'"+ x.key + "'";
            var seleccionReplace = x.key;
            values = values.replace(','+seleccionReplace, '');
            var prexio = x.precio;
            values = values.replace(','+prexio, ': '+"$"+prexio);
            values = '<input type="text" name="'+x.seleccion+'" id="caja_valor" value="'+values+'" disabled>';
            var botonMenos = '<button><a href="" onclick="seleccionMenos('+seleccion+')">▬</a></button>';
            var botonErase = '<button><a href="" onclick="botonErase('+seleccion+')">Eliminar</a></button>';
            document.write(botonErase + botonMenos + values);            
        }
    } 
}

function botonErase(seleccion){
    localStorage.removeItem(seleccion);
}

function cancelarSeleccion(){
    localStorage.clear();
}


