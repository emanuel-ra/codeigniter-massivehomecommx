
const toggleFormDistributorFields = (flag) => {
    const distributorFields = document.getElementById('distributorFields');    
    const inputs = document.querySelectorAll('.check-distributor')
    if (flag === true) {
        distributorFields.style.display = 'block';
        inputs.forEach(input => {
            input.setAttribute('required','required')
        })
    }else{
        distributorFields.style.display = 'none';
        inputs.forEach(input => {
            input.removeAttribute('required')
        })
    }
    
}

const onChangeContactType = () => {   
    const radios = document.querySelectorAll('input[name="wantsToBeDistributor"]');   
    radios.forEach(radio => {
        radio.addEventListener('change', () => {
            const selectedRadio = JSON.parse(document.querySelector('input[name="wantsToBeDistributor"]:checked').value);
            toggleFormDistributorFields(selectedRadio)
        });
    });    
}

onChangeContactType();

