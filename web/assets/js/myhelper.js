
    var elements = ["AAA","BBB","CCC","DDD","EEE","FFF","GGG","HHH","III","JJJ","KKK","LLL","MMM","NNN","OOO","PPP","QQQ","RRR"];

    var eI = 0;
    for(var i = 0;i < Math.ceil(elements.length/4); i++){
        console.log("/*******");
        for(var j = 0; j < 4; j++){
            if(elements[eI+j] !== undefined){
                console.log(elements[eI+j]);
            }
        }
        eI+=4;
        console.log("*******/");
    }
