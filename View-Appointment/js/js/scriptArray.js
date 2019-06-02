// button-1
var array1=['red','white','orange','pink','dodgerblue','yellow'];
setInterval(test1,800);
var temp1=0;
function test1(){
    temp1++;
    if(temp1==array1.length){
        temp1=0;
    }
    $('button.btn-1').css("background-color", array1[temp1]);
    // $('body').css("transition","all 5s");
}

// button-2
var array2=['white','orange','pink','dodgerblue','yellow','red'];
setInterval(test2,800);
var temp2=0;
function test2(){
    temp2++;
    if(temp2==array2.length){
        temp2=0;
    }
    $('button.btn-2').css("background-color", array2[temp2]);
    // $('body').css("transition","all 5s");
}

//button-3
var array3=['orange','pink','dodgerblue','yellow','red','white'];
setInterval(test3,800);
var temp3=0;
function test3(){
    temp3++;
    if(temp3==array3.length){
        temp3=0;
    }
    $('button.btn-3').css("background-color", array3[temp3]);
    // $('body').css("transition","all 5s");
}

//button-4
var array4=['pink','dodgerblue','yellow','red','white','orange'];
setInterval(test4,800);
var temp4=0;
function test4(){
    temp4++;
    if(temp4==array4.length){
        temp4=0;
    }
    $('button.btn-4').css("background-color", array4[temp4]);
    // $('body').css("transition","all 5s");
}

//button-5
var array5=['dodgerblue','yellow','red','white','orange','pink'];
setInterval(test5,800);
var temp5=0;
function test5(){
    temp5++;
    if(temp5==array5.length){
        temp5=0;
    }
    $('button.btn-5').css("background-color", array5[temp5]);
    // $('body').css("transition","all 5s");
}

//button-6
var array6=['yellow','red','white','orange','pink','dodgerblue'];
setInterval(test6,800);
var temp6=0;
function test6(){
    temp6++;
    if(temp6==array6.length){
        temp6=0;
    }
    $('button.btn-6').css("background-color", array6[temp6]);
    // $('body').css("transition","all 5s");
}

/*
//knight rider
var colors=['white','beige','pink','hotpink','hotpink','crimson','red'];
changeColor();
setInterval(changeColor,500);

function changeColor(){
    var lastColor=colors.pop();
    colors.unshift(lastColor);
    for(var i=0; i<6; i++){
        $('div@queue aside:nth-child('+(4+i)+')').css('background-color',colors[i]);
    }
}
*/

var a=new Object();
var b=new Object();
a.id="C001";
a.name="hiruni";
a.prototype=b.prototype;