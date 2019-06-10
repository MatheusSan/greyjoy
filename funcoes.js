function getText(msg){                      //função da gabi para converter texto para array;
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
    const arquivoJson = localStorage.getItem('dados');
    const arrayDeDados = JSON.parse(arquivoJson);
    return armazenarNoArquivoJson(arrayDeDados);
}

function apagar(){
    return localStorage.clear();                    //método nativo do js, poderia ser utilizado o remove('index')
}

function armazenarNoArquivoJson(array){             //armazena os dados no arquivo JSON
    return $.post('query.php', {dados: array});     //método do Jquery $.METODO('url.php', {nome: variável});
}