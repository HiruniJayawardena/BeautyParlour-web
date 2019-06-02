var colors=['white','white','white','pink','hotpink','crimson','red'];
changeColors();
setInterval(changeColors, 100);

function changeColors() {
    var temp=colors.pop();
    colors.unshift(temp);
    for(var i=0; i<colors.length; i++){
        $('div.hiru button:nth('+i+')').css("background-color",colors[i]);
    }


}
// for(var i=0; i<colors.length; i++){
//     $('div.hiru button:nth('+i+')').css("background-color",colors2[i]);
// }

// var colors2=['red','crimson','hotpink','pink','white','white','white'];
// changeColors2();
// setInterval(changeColors2, 100);
//
// function changeColors2() {
//     var temp2=colors2.pop();
//     colors.unshift(temp2);
//     for(var i=0; i<colors.length; i++){
//         $('div.hiru button:nth('+i+')').css("background-color",colors2[i]);
//     }
// }

