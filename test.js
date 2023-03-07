function changeValores(id){
    let CantElement = document.getElementById("cant" + id);
    let ValorElement = document.getElementById("valor" + id);
    let TotalElement = document.getElementById("total" + id);

    let totalParcial = Number(CantElement.value) * Number(ValorElement.value);

    TotalElement.setAttribute("data-total",totalParcial);
    TotalElement.value = formatNumber(totalParcial);
    actualizarTotales();
  }

  function actualizarTotales(){
    let TotalElement = document.getElementById("total");
    let suma = 0;

    document.querySelectorAll("input[data-total]").forEach( e => suma += Number(e.getAttribute("data-total")));
    TotalElement.value = formatNumber(suma);
  }
  
  function formatNumber(number){
    const exp = /(\d)(?=(\d{3})+(?!\d))/g;
    const rep = '$1.';
    return number.toString().replace(exp,rep);
  } 