
function getNumber() {  
    for (index = 0; index < 3; index++) {
        var valOne = Number(prompt("Inserisci il primo numero"));
        var valTwo = Number(prompt("Inserisci il secondo numero"));
        var valThree = Number(prompt("Inserisci il terzo numero"));
        var query = {"par_one": valOne,
                    "par_two": valTwo,
                    "par_three": valThree
                    };
        $.ajax({
            url: "api.php",
            method: "GET",
            data: query,
            success: function (data) {    
                printPara(data);
            },
            error: function () {  
                alert("C'è stato un errore in download");
            }
        });
    }
}

function printPara(data) {  
    var contenitore = $(".container");
    var source = $("#item-template").html();
    var template = Handlebars.compile(source);
    for (i = 0; i < 1; i++) {
        var d = data[i];
        var context = {x: d.x,
                       y: d.y, 
                       z: d.z,
                       area: data[1],
                       volume: data[2]
                    };     
    }
    var html = template(context);
    contenitore.append(html);
}

function init() {  
    $(document).on("click", ".add", getNumber);   
}

$(document).ready(init);