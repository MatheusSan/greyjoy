function compareKeyword(array){
    const tam = array.length;
    var erros = 0;
    for(var i = 0; i < tam; i++){
        if(array[i] == 'ui'){
            console.log("TAVA PROCURANDO UMA STRING QUE BATESSE COM A TUA, ENCONTROU OTÁRIO")
        }
        else{
            erros ++;
        }
    }
    console.log("ERROU "+ erros + " VEZES, OTARIO");
}