Blockly.defineBlocksWithJsonArray([
  {
    type: "regar_planta",
    message0: "Regar Planta",
    previousStatement: null,
    nextStatement: null,
    colour: 230,
    tooltip: "",
    helpUrl: ""
  },
  {
    type: "plantar_sementes",
    message0: "plantar sementes",
    previousStatement: null,
    nextStatement: null,
    colour: 230,
    tooltip: "",
    helpUrl: ""
  }
]);
Blockly.JavaScript["regar_planta"] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = `var regar; 
              if (typeof regar === "undefined") {
                regar = 0;
                  document.getElementById("vazo").style.display = "none"; 
                  document.getElementById("vazo2").style.display = "";
                  document.getElementById("vazo3").style.display = "none";
                  document.getElementById("vazo4").style.display = "none";
              }
              regar++;
              if(regar == 2){
                document.getElementById("vazo").style.display = "none";
                document.getElementById("vazo2").style.display = "none"; 
                document.getElementById("vazo3").style.display = "";
                document.getElementById("vazo4").style.display = "none";
              }else if(regar == 3){
                document.getElementById("vazo").style.display = "none";
                document.getElementById("vazo2").style.display = "none"; 
                document.getElementById("vazo3").style.display = "none";
                document.getElementById("vazo4").style.display = "";

                Toast.fire({
                  icon: 'success',
                  title: 'Parabéns Você ganhou o jogo'
                })              
              }
              
                \n`;
  return code;
};
Blockly.JavaScript["plantar_sementes"] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code =
    'var sementes; if (typeof sementes === "undefined") {sementes = 0;}sementes++;if(regar == 1 && sementes == 1){document.getElementById("vazo").style.display = "none"; document.getElementById("vazo2").style.display = "";document.getElementById("vazo3").style.display = "none";document.getElementById("vazo4").style.display = "none";} \n';
  return code;
};
