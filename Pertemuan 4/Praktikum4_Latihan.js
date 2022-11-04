function fibonacci(nilai) {
    nilai = nilai * 10;

    let temp1 = 1;
    let temp2 = 1;
    let hasil = 0;
    process.stdout.write(temp1 + ' ');
    do {
        process.stdout.write(temp2 + ' ');
        hasil = temp1 + temp2;
        temp1 = temp2;
        temp2 = hasil;
    } while(hasil < nilai);
}

function faktorial(nilai) {
    nilai = nilai / 2;
    
    let hasil = 1;
    process.stdout.write('1');
    for(i = 1 ; i < nilai ; i++) {
        process.stdout.write('x' + (i + 1));
        hasil = hasil * (i + 1);
    }
    console.log('=' + hasil);
}

let value;

if (value <= 0 || value >=21) {
    console.log('Pilih bilangan antara 1 sampai 20');
} else {
    if (value % 2 == 0 ) {
        faktorial(value);
    } else {
        fibonacci(value);
    }
}