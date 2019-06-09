function collectMsg(msg){
    const hour = moment().format('LT');
    const str = msg;
    const finalArray = str.split(" ");
    finalArray.push(hour);
    //array = compareKeyword(finalArray);
    return finalArray;
    
}

