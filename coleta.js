$.getScript("teste.js", function() {
    alert("Script loaded but not necessarily executed.");
 });


function collectMsg(msg){
    const str = msg;
    const finalArray = str.split(" ");
    return finalArray;
}


