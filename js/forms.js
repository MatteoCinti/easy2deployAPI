const selectDropdown = document.getElementById('select-dropdown');
const selectPicker = document.querySelectorAll('.selectpicker');
const clearButtons = document.querySelectorAll('.clear');
const locationsDisplay = document.getElementById('multiselect-display');
var selected = document.querySelectorAll('#select-location option:checked');

// All elements with :selected option
let locationDisplayed
// Array of selected Elements
var selectedArray = []
// Create a fragement
var fragment = document.createDocumentFragment();


// Clear all Selected Elements
const clear = () => {
  selected = document.querySelectorAll('#select-location option:checked');
  locationDisplayed = document.querySelectorAll('.option-selected');
  selected.forEach( el => {
    locationDisplayed.forEach(el => el.remove())
    el.selected = false;
    console.log(el);
  })
  selectedArray = [];
}

clearButtons.forEach(button => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    clear();
  })
})

// Clear Single Object From Cross
const deleteSingleElement = (e) => {
  e.target.parentNode.remove();
  let value = e.target.nextSibling.nodeValue
  // Close Dropdown 
  // I use it this way in case I want to impletement various multi selectors.
  selectPicker.forEach(dropdownContainer => {
    if(dropdownContainer.classList.contains('flex')){
      dropdownContainer.classList.remove('flex');
    } 
  })
  // Remove selected Tag From the Element in the Select table
  selected.forEach( el => {
    if(el.value == value){
      el.selected = false;
    }
  })
  // Filter Out Clicked Element
  selectedArray = selectedArray.filter( item => item !== value )
}

// Get Single elements When Clicked
const options = document.querySelectorAll('option');
options.forEach( option => {
  option.addEventListener('click', e => {
    // Get Element Data
    let value = e.target.attributes.name.nodeValue;
    value = value.charAt(0).toUpperCase() + value.slice(1);
    selectedArray.push(value);
  })
})

// Get Multiple Elements and Handle Dropdown Menu
if( selectDropdown ){
  selectDropdown.addEventListener('click', (e) => {
    
    // Create an Array From Multiple Selected Elements
    selected = document.querySelectorAll('#select-location option:checked');
    var values = Array.from(selected).map(el => el.value);
    
    // Combine multiple Selected elements and single selected Elements
    selectedArray = [ ...new Set( [...selectedArray, ...values] ) ]
    locationDisplayed = document.querySelectorAll('.option-selected');
    let locationDisplayedArray = Array.from(locationDisplayed).map(el => el)

    // Open Close Selector
    selectPicker.forEach(dropdownContainer => {

      // Show and hide 
      if(dropdownContainer.classList.contains('flex')){
        dropdownContainer.classList.remove('flex');
      } else if ( !dropdownContainer.classList.contains('flex') ){
        dropdownContainer.classList.add('flex');
      }
    
    })

    // Check Selected Elements From Various Methods
    if(locationDisplayedArray.length !== selectedArray.length){
      // Clean Display
      if(locationDisplayed.length > 0 ){
        locationDisplayed.forEach(el => el.remove())
      }
      selectedArray = [ ...new Set( [...selectedArray, ...values] ) ]
      
      // Display Selected Elements
      selectedArray.map(el => {
        var div = document.createElement('div')
        var button = document.createElement('div')
        div.classList.add('option-selected');
        button.classList.add('cross', 'delete');

        div.textContent = el
        button.addEventListener('click', e => deleteSingleElement(e));
      
        div.prepend(button);
        fragment.appendChild(div);
      
      });
    
      locationsDisplay.prepend(fragment);
    }
  })
}





