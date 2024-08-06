function message(){
    var cardname = document.getElementById('cardname');
    var cardno = document.getElementById('cardno');
    var month = document.getElementById('month');
    var year = document.getElementById('year');
    var cvv = document.getElementById('cvv');
    const success = document.getElementById('success');

    if(cardname.value === '' ||  cardno.value === '' || month.value === ''||  year.value === '' || cvv.value === ''){
        danger.style.display = 'block';
    }
    else{
        setTimeout(() => {
            cardname.value = '';
            cardno.value = '';
            month.value = '';
            year.value = '';
            cvv.value = '';
        }, 2000);

        success.style.display = 'block';
    }


    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
    }, 4000);

}
