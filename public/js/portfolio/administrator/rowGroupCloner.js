/* 
 * Author     : sergi
 */

buttonToRemoveLineCode = '<a class="button remove" onclick="removeLine()">X</a>';

function addInputRowGroup(getCodeId, pastCodeId){
    
    var newRow = document.createElement('div');
    
    newRow.innerHTML = document.getElementById(getCodeId).outerHTML + buttonToRemoveLineCode;
    
    document.getElementById(pastCodeId).appendChild(newRow);
}

function removeLine(){
    
    var line = event.target.parentNode;
    
    if (line.getElementsByTagName('input')[0].value){
        line.parentNode.parentNode.getElementsByClassName('trashList')[0].value += line.getElementsByTagName('input')[0].value + ',';
    }
    
    line.remove();
}