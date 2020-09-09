function myFunction() {
    const x = document.getElementById("appbundle_preinscription_codePostal").value;
    if(x.length < 5) {
        $("#appbundle_preinscription_codePostal").css("background-color","#42f5ef");
    }
    if(x.length === 5) {
        $("#appbundle_preinscription_codePostal").css("background-color","white");
    }
}

function telPFunction() {
    const telP = document.getElementById("appbundle_preinscription_numTelephone").value;
    if(telP.length < 10) {
        $("#appbundle_preinscription_numTelephone").css("background-color","#42f5ef");
    }
    if(telP.length === 10) {
        $("#appbundle_preinscription_numTelephone").css("background-color","white");
    }
}

function telFixFunction() {
    const telFix = document.getElementById("appbundle_preinscription_numTelDom").value;
    if(telFix.length < 10) {
        $("#appbundle_preinscription_numTelDom").css("background-color","#42f5ef");
    }
    if(telFix.length === 10) {
        $("#appbundle_preinscription_numTelDom").css("background-color","white");
    }
}

function telBFunction() {
    const telB = document.getElementById("appbundle_preinscription_numBureau").value;
    if(telB.length < 10) {
        $("#appbundle_preinscription_numBureau").css("background-color","#42f5ef");
    }
    if(telB.length === 10) {
        $("#appbundle_preinscription_numBureau").css("background-color","white");
    }
}
