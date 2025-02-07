const onChangeCategories = (event) => {
    document.querySelectorAll('.checks-categories').forEach((check) => {
        check.addEventListener('change', (e) => {
            const checkedValues = Array.from(document.querySelectorAll('.checks-categories:checked')).map((check) => check.value);            
            document.getElementById('filter_categories_selected_counter').innerText = `${checkedValues.length} selected`;
        });
    });
}

const resetCheckboxes = () => {
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.checked = false;
    });
    console.log("All checkboxes have been reset");
}

const checkIfAnyCheckboxIsChecked = () => {
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        if (checkbox.checked) {
            const checkedValues = Array.from(document.querySelectorAll('.checks-categories:checked')).map((check) => check.value);            
            document.getElementById('filter_categories_selected_counter').innerText = `${checkedValues.length} selected`;
        }
    });    
}

// Call the function
onChangeCategories();
checkIfAnyCheckboxIsChecked();