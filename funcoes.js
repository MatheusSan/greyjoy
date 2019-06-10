function getText(msg){                                  //função da gabi para converter texto para array;
    const str = msg;
    const finalArray = str.split(" ");
    return finalArray;   
}

function armazenar(value){
    let array = getText(value);                         //função da gabi

    const dadosJson = localStorage.getItem('dados');    //busca os dados armazenados na máquina da pessoa 
    if(dadosJson == null){
        const dadosJson = JSON.stringify(array);        //transforma o array num formato JSON
        localStorage.setItem("dados", dadosJson);       //armazena na máquina da pessoa;
    }
    else{
        array_recuperado = JSON.parse(dadosJson);       //transforma o arquivo JSON em array;
        array_recuperado.forEach(element => {           //passa os elementos do array_recuperado para o array
                array.push(element);
            }
        );
        const novoDadoJson = JSON.stringify(array);
        localStorage.setItem("dados", novoDadoJson);
    }
    return console.log(array);
}

function apagar(){
    return localStorage.clear();
}
