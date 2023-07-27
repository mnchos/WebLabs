function del(node){
    var elems = document.getElementsByClassName('marked');
    for(var i=elems.length-1; i>=0; i--) elems[i].outerHTML = elems[i].innerHTML;
}
function enumChilNotes(node){

   const searchText = document.getElementById('input').value;

    if (1 == node.nodeType && searchText!=''){
        var child = node.firstChild;
        while(child){
            var nextChild = child.nextSibling;
            if(1 == child.nodeType){
                enumChilNotes(child);
            }
            else if(3 === child.nodeType && child.nodeValue.indexOf(searchText) != -1 ){
                var ch = child.nodeValue;
                var before = "<font color =\"red\" class=\"marked\">";
                var after = "</font>";
                var replString =  before + searchText + after ;
                var replacedObject = ch.replace(new RegExp(searchText,'gim'), replString);
                var newchild = document.createElement('span');
                newchild.innerHTML = replacedObject;
                node.replaceChild(newchild, child);
            }
            child = nextChild;
        }
    }
}