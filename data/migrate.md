Migration to build 100413
==========================

Build 100413 introduces few changes in API which need to be reflected in code

### Renamed methods

getParent -> getParentView  
getInput -> getInputNode  
update -> updateItem  
item -> getItem  

idByIndex -> getIdByIndex  
idByValue -> getIdByValue  
indexById -> getIndexById  

hasChild -> isBranch

getSelected -> getSelectedId  
showIndex -> showItemByIndex  

setFilter -> registerFilter  


columnIndex -> getColumnIndex  

getColumn -> getColumnConfig  

toPDF -> exportToPDF  
toExcel -> exportToExcel  

getActive -> getActiveId  
focusView -> showView

getUnitItems -> getUnitList  
scrollState -> getScrollState  
editFocus -> focusEditor

dataCount -> count

first, last, next, prev, nextSibling, prevSibling, firstChild, parentId, branchIndex  
->  
getFirstId, getLastId, getNextId, getPrevId, getNextSiblingId, getPrevSiblingId, getFirstChildId, getParentId, getBranchIndex

### renamed events
onBeforeUpdate =>  onDataUpdate

### removed methods
first ( for layout based components )

### other
addMark, removeMark, getMark, clearMark - can be accessed on data object only
On component you can use addCss, removeCss, hasCss, clearCss which works the same as css based marks

